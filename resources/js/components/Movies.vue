<template>
    <div>
        <h2 class="text-center">Movies Showing </h2>
        <table class="table">
            <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Cinema</th>
                <th>Rating</th>
                <th>Genre</th>
                <th>Show Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="movie in movies" :key="movie.id">
                <td>{{ movie.id }}</td>
                <td>{{ movie.name }}</td>
                <td>{{ movie.cinemas.cinema_name }}</td>
                <td>{{ movie.rating }}</td>
                <td>{{ movie.genre }}</td>
                <td>{{ movie.showtime }}</td>
                <td><router-link :to="{name: 'edit', params: { id: movie.id }}" class="btn btn-success">Edit</router-link></td>
                <td><button class="btn btn-danger" @click="deleteMovies(movie.id)">Delete</button></td>
           </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                movies: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/movies')
                .then(response => {
                    this.movies = response.data;
                    console.log(this.movies);
                });
        },
        methods: {
            deleteMovies(id) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/movies/${id}`)
                    .then(response => {
                        let i = this.movies.map(data => data.id).indexOf(id);
                        this.movies.splice(i, 1)
                    });
            }
        }
    }
</script>
