import axios from "axios";
const SuperFetch = axios.create({
    baseURL: 'http://localhost:8000/api/v1',
})
SuperFetch.defaults.headers.common['X-Requested-with'] = 'XMLHttpRequest';

export default SuperFetch
