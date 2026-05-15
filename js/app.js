Vue.createApp({
    data(){
        return{
            header:[],
            rows:[]
        }
    },
    methods:{
        upload(event){
            let file=event.target.files[0];
            let reader=new FileReader();
            reader.onload=(event)=>{
                let data=event.target.result;
                let lines=data.trim().split("\n");
                this.header=lines[0].trim().split(",");
                for(let i=1;i<lines.length;i++){
                    this.rows.push(lines[i].trim().split(","));
                }
                // lines.forEach(element => {
                //     this.rows.push(element.trim().split(","));
                // });
            }
            reader.readAsText(file);
        }
    }
}).mount("#app")