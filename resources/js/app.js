import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import './sweetalert';
import { showFlashMessages } from './sweetalert';

document.addEventListener('DOMContentLoaded', showFlashMessages);
