export default {
    inserted: el => {
        function loadImage() {
            const parentElement = Array.from(el.children)
            var imageElements = [];
            parentElement.forEach((element) => {
                if(element.nodeName == 'IMG') {
                    imageElements.push(element)
                }
            })

            imageElements.forEach((imageElement) => {
                if(imageElement) {
                    imageElement.addEventListener('error', () => {
                        console.log('error: Image Failed to Load')
                    });
    
                    el.classList.add('loaded')
                    if(el.classList.contains('loaded')) {
                        imageElement.src = imageElement.dataset.src;
                    }
                }
            })
        }

        function handleIntersect(entries, observer) {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    loadImage();
                    observer.unobserve(el);
                }
            });
        }

        function createObserver() {
            const options = {
                root: null,
                threshold: "0"
            };
            const observer = new IntersectionObserver(handleIntersect, options);
            observer.observe(el);
        }
        if(window["IntersectionObserver"]) {
            createObserver();
        } else {
            loadImage();
        }
    }
}