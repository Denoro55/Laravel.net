function raf(fn){
    window.requestAnimationFrame(function(){
        window.requestAnimationFrame(function(){
            fn();
        })
    })
}

module.exports = function Element(obj){
    this.obj = obj;
    this.phase = true;
    this.height = this.obj.offsetHeight;
    this.handler = function(){
        this.style.display = 'none';
        this.removeEventListener('transitionend',this.handler);
    }
    this.handler2 = function(){
        this.style.removeProperty('height');
        this.removeEventListener('transitionend',this.handler2);
    }
    this.toggle = function(duration){
        this.obj.style.transition = 'height '+duration/1000+'s';
        if (this.phase){
            this.obj.style.height = this.obj.offsetHeight+'px';
            raf(()=>{
                this.obj.style.height = 116;
            })
            this.obj.addEventListener('transitionend',this.handler);
            this.obj.removeEventListener('transitionend',this.handler2);
        } else {
            this.obj.addEventListener('transitionend',this.handler2);
            this.obj.removeEventListener('transitionend',this.handler);
            this.obj.style.display = 'block';
            let hh = this.obj.offsetHeight;
            this.obj.style.height = '';
            this.height = this.obj.offsetHeight;
            this.obj.style.height = hh+'px';
            raf(()=>{
                this.obj.style.height = this.height+'px';
            })
        }
        this.phase=!this.phase
    }
}