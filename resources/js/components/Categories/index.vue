<template>


   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                       <form id="search" class="pb-2">
					      <input class="form-control " type="text" placeholder="Search..." name="query" v-model="searchQuery" aria-describeBy="basic-addon1">
					      
					    </form>

					    <div v-if="categories">
					    	<demo-grid
				               :data="categories"
				               :columns="brandsColumns"
				               :filterKey="searchQuery"
					    	>
					        </demo-grid>
					    </div>
					    <div v-else>
					    	Loading...
					    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



	
</template>

<script type="text/javascript">

	import DemoGrid from '../Filtering/Filter.vue';
	export default{
		components:{
           DemoGrid
		},
		data(){
			return {
               searchQuery: '',
               brandsColumns: ['name'],
               categories:[]
			}
		},
		created(){
			this.fetchBrands();
		},
		methods:{
			fetchBrands(){
				axios.get('/api/categories')
				.then(res=>this.categories=res.data.categories)
			},
		},
	}
</script>