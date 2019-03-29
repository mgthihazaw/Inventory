
<template>


   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Products</div>

                    <div class="card-body">
                       
					      <input class="form-control " type="text" placeholder="Search..." name="query" v-model="searchQuery" aria-describeBy="basic-addon1">
					      
					    

					    <div v-if="products" class="pt-2">
					    	
					    	<demo-grid
				               :data="products"
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
               brandsColumns: ['serial','quantity','manufacture','description','location','category','model'],
               products:[]
			}
		},
		created(){
			this.fetchBrands();
		},
		methods:{
			fetchBrands(){
				axios.get('/api/products')
				.then(res=>this.products=_.map(res.data.products,function(num){

					var pick=_.pick(num,'serial','quantity','manufacture.name','description.name','location.name','category.name','brand.name','status');

					var objectProduct= {
						quantity:pick.quantity,
						serial:pick.serial,
						manufacture:pick.manufacture.name,
						description:pick.description.name,
						location:pick.location.name,
						category:pick.category.name,
						model:pick.brand.name,

					}

					return objectProduct

				})
				)
			},
		},
	}
</script>