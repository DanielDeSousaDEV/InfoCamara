import axios from 'axios';
import { setDefaultOptions } from 'date-fns';
import { ptBR } from 'date-fns/locale';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept'] = 'application/json';

setDefaultOptions({ locale: ptBR })