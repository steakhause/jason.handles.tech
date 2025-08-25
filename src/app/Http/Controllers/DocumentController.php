<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function storeUserInfo(Request $request)
    {
        $request->validate([
            'user_id'  => ['required','integer','in:'.$request->user()->id], // ensure it’s the authed user
            'platform' => ['required','in:google'],
            'title'    => ['required','string'], // will be "User Information"
            'doc_id'   => ['required','string'],
        ]);

        $docId = $this->extractGoogleId($request->string('doc_id'));
        if (!$docId) {
            return back()->withErrors([
                'doc_id' => 'Please paste a valid Google document URL or ID.',
            ])->withInput();
        }

        // Build a canonical URL (Docs by default; still valid to open).
        $canonicalUrl = "https://docs.google.com/document/d/{$docId}";

        // Store or update the per-user "User Information" document.
        Document::updateOrCreate(
            [
                'user_id'  => $request->user()->id,
                'platform' => 'google',
                'title'    => 'User Information',
            ],
            [
                'doc_id'   => $docId,
                'url'      => $canonicalUrl,
                'platform' => 'google',
                'title'    => 'User Information',
            ]
        );

        return back()->with('status', 'Your Google document has been linked successfully.');
    }

    private function extractGoogleId(string $raw): ?string
    {
        $raw = trim($raw);
        if ($raw === '') return null;

        // If it’s a URL, try to pull out /d/<id> or ?id=<id>
        if (preg_match('~^https?://~i', $raw)) {
            $parts = parse_url($raw);
            $path  = $parts['path']  ?? '';
            $query = $parts['query'] ?? '';

            if (preg_match('~/d/([a-zA-Z0-9_-]{10,})~', $path, $m)) {
                return $m[1];
            }
            if (preg_match('~(?:^|&)id=([a-zA-Z0-9_-]{10,})~', $query, $m)) {
                return $m[1];
            }
        }

        // Otherwise treat it as a raw ID if it looks like one.
        return preg_match('~^[a-zA-Z0-9_-]{20,}$~', $raw) ? $raw : null;
    }
}
