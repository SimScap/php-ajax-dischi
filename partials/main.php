<main class="container-fluid p-3">
    <div class="row row-cols-2 row-cols-md-5 g-4 text-center">  
        <div class="col" v-for="data in music">
            <div class="card " style="height: 100%;">
                <img :src="data.poster" class="card-img-top" :alt="data.title">
                <div class="card-body">
                    <h5 class="card-title">{{data.title}}</h5>
                    <p class="card-text">{{data.author}}</p>
                    <p class="card-text">{{data.genre}}</p>
                    <p class="card-text">{{data.year}}</p>
                </div>
            </div>
        </div>
    </div>
</main>