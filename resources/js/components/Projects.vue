<template >
    <div class="commits-container text-center align-middle">
        <ul class="divide-y divide-black">
            <li v-for="project in this.projects" :key="project.title" class="flex items-center">
                <div class="flex-1/10 text-sm">{{project.data}}</div>
                <div class="flex-1">
                    <div class="text-3xl">{{project.title}}</div>
                    <div>{{project.descricao}} </div>
                    <div class="text-sm"> {{project.tecnologies}}</div>  
                </div>
                <div class="flex-1/10">
                    <img src="images/logoJ.png" alt="" class="w-40 h-20">
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            projects:[
                {title:'Route Optimization in Warehouses', 
                    descricao:'Developed a application that uses Artificial Intelligence to otimize the path of the picking robots insite a warehouse', 
                    tecnologies:'Java, Artificial Intelligence',
                    data:'Jan 2019 - Jul 2019'},
                {title:'Spots', 
                    descricao:'Developed an android aplication that allow user to find free spots, on campus, to park their car', 
                    tecnologies:'Java(Android)',
                    data:'Oct 2018 - Jan 2019'},
                {title:'Restaurant Management IPL', 
                    descricao:'Implemented a single page application (SPA) for the management of a restaurant’s order system, using Vue.js framework for the development of the web client', 
                    tecnologies:'Laravel + Vue.js',
                    data:'Oct 2018 - Jan 2019'},
                {title:'Personal Finances Assistant IPL', 
                    descricao:'Developed a web application which main purpose was helping users to manage their personal finances', 
                    tecnologies:'Laravel(PHP framework)',
                    data:'Mar 2018 - Jun 2018'},
            ]
        }}
};
</script>