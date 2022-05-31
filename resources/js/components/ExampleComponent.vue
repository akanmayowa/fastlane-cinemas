<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h4>FASTLANE CINEMA</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-link"><strong>Movie List</strong></router-link>
                    <router-link to="/create" class="nav-link"><strong>Add Movie</strong></router-link>
                          <a class="nav-link" href="#">Features</a>
                         <a class="nav-link" href="#">Pricing</a>
                               <a class="nav-link" href="#">Features</a>
                                <a class="nav-link" href="#">About</a>
                </div>
            </div>
        </nav>

        <router-view> </router-view>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

        }
    }
</script>
