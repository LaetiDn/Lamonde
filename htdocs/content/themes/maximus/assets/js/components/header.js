const Header = function() {
    this.root = document.querySelector("header.header")
    let prevScrollpos = window.pageYOffset

    this.init = () => { 
        this.registerEvents()
    }

    this.registerEvents = () => { 
        window.addEventListener('scroll', onScroll);
    }

    onScroll = () => {
        let currentScrollPos = window.pageYOffset;
        
        if (currentScrollPos > 300) {

            if (prevScrollpos > currentScrollPos) {
                this.root.classList.remove("retract")
            } else {
                this.root.classList.add("retract")
            }

            prevScrollpos = currentScrollPos;
        }
    }


}

module.exports = Header