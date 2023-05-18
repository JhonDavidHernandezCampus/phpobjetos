class olla{
    lugares
    #merca
    constructor(){

    }
    set setLugares(a){
        this.lugares = a;
    }
    get getLugares(){
        return this.lugares;

    }
}

let obj = new olla();

obj.setLugares= "Bucaramanga";
console.log(obj.getLugares);