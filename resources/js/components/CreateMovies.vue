<template>
    <div>
        <div class="conatiner-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="">Add a Movie</h3>
                </div>

                    <div class="card-body">
                        <form @submit.prevent="addMovies">
                            <div class="form-group">
                                <label>Name of Movie</label>
                                <input required type="text" class="form-control" v-model="movies.name">
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <input required type="number" class="form-control" v-model="movies.rating">
                            </div>
                            <div class="form-group">
                                <label>Genre</label>
                                <input required type="text" class="form-control" v-model="movies.genre">
                            </div>

                            <div class="form-group">
                                <label>Showtime</label>
                                <input  required type="datetime-local" value="2022-06-01T08:30" class="form-control" v-model="movies.showtime">
                            </div>


                            <div class="form-group">
                                <label>Cinema</label>
                                <select class="form-control" v-model="movies.cinema_id"  @change="getCinemas()">
                                 <option disabled value="" selected >Pls Select Cinema Center</option>
                                <option v-for='cinema in cinemas'  :value='cinema.id'>
                                 {{ cinema.cinema_name }} </option>
                                </select>
                            </div>

                                <div class="text-center mt-5">
                                  <button type="submit" class="btn btn-primary">Add Movies</button>
                                </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                movies: {},
                cinemas: []
            }
        },
        methods: {
            addMovies() {
                this.axios
                    .post('http://127.0.0.1:8000/api/movies', this.movies)
                    .then(response => (
                        this.$router.push({
                            name: 'movies'
                        })
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            },
            getCinemas() {
               this.axios
                    .get('http://127.0.0.1:8000/api/cinemas')
                    .then((response) => {
                    this.cinemas = response.data;
                    console.log(this.cinemas);
                })
                    .catch((error) => {
                    console.log(error);
                });
            },
        },
                created: function(){
                this.getCinemas()
        }
    }
</script>
