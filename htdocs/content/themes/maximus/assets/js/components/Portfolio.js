const Portfolio = function(el) {
    this.root = el

    this.init = () => {

        this.root.imagesLoaded(() => {
            var grid = this.root.find('.item-wrapper').masonry(
                {
                    itemSelector: "#"+this.root[0].id+" .item",
                    transitionDuration: 0,
                    percentPosition: !0
                }
            )
        })

    }
}

module.exports = Portfolio