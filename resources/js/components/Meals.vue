<template>
    <div>
        <button class="btn btn-outline-info float-right">
            Your Cart <span class="badge badge-info p-1 text-white ml-1"> {{ panier.length}}</span>
        </button>

        <h1 class="text-center">Meals List</h1>
        
        <div class="py-5">
            <div class="container d-flex justify-content-center">
                <div class="row w-100">
                    <div v-for="meal in mealsList" :key="meal.id" class="card-group col-sm-12 col-md-6 col-lg-4">
                        <div class="card mb-4 shadow-sm pb-5">
                            <img :src="meal.photo" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img">
                            <div class="card-body">
                                <h4 class="card-title">{{ meal.name }}</h4>
                                <p class="card-text">{{ meal.description }}</p>
                                <div class="d-flex justify-content-between align-items-center c-footer">
                                    <div class="btn-group">             
                                        <button type="button" class="btn btn-sm btn-outline-success mr-2">View</button>
                                        <button @click='sendToLocal(meal.id)' type="button" class="btn btn-sm btn-outline-danger">Add to cart</button>
                                    </div>
                                    <p class="m-0"><strong class="text-secondary"><u>{{ meal.sale_price }} $</u></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {    
    name : "Meals",
    data() {
        return {
            mealsList : Array,
            panier : []
        }
    },
    mounted() {
        axios.get('/api/meal')
        .then(res => this.mealsList = res.data)
        .catch(err => console.log(err));

        if(localStorage.getItem('Panier')) {
            this.panier = JSON.parse(localStorage.getItem('Panier'));
        }
    },
    methods: {
        sendToLocal : function(id) {
            axios.get('/api/meal/' + id)
            .then(res => {
                let index = this.panier.findIndex(meal => meal.id == id);
                if (index == -1) {
                        this.panier.push(res.data);
                    res.data.quantity = 1;
                    localStorage.setItem('Panier', JSON.stringify(this.panier));
                } else {
                    this.panier[index].quantity += 1
                }
            })
            .catch(err => console.log(err))
        }
    }
}
</script>