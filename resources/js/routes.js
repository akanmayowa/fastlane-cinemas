import Movies from './components/Movies.vue';
import CreateMovies from './components/CreateMovies.vue';
import EditMovies from './components/EditMovies.vue';

export const routes = [
    {
        name: 'movies',
        path: '/',
        component: Movies
    },
    {
        name: 'create',
        path: '/create',
        component: CreateMovies
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditMovies
    }
];
