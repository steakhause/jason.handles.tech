
import './bootstrap';

import Alpine from 'alpinejs';
import { initChatControls } from './chat';
import { initBoxedNav } from './boxed-nav';

window.Alpine = Alpine;
Alpine.start();

// Run after DOM is ready (safe even if already loaded)
const start = () => {
  initChatControls?.();
  initBoxedNav?.();
};

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', start, { once: true });
} else {
  start();
}
// resources/js/app.js

document.addEventListener('DOMContentLoaded', () => {
  console.debug('[app] DOMContentLoaded -> initChatControls()');
  initChatControls();
});
