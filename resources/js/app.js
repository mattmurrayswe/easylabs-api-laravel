import './bootstrap';
import 'socket.io-client';
import Echo from 'laravel-echo';
import io from 'socket.io-client';

window.io = io;
window.Echo = Echo;
