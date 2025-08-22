import './bootstrap';

import Alpine from 'alpinejs';
import { initChatControls } from './chat';
document.addEventListener('DOMContentLoaded', initChatControls);

window.Alpine = Alpine;

Alpine.start();
