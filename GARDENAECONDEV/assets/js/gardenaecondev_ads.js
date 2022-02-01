let response = await fetch('https://rank.gs/api/')
        let getReult = await response.json()
        let maxNum = 0
        let minNum = 0
        let showCount = 0
        let getNumerShow = 0
        let addAdsElements = []
        let count = 0
        let setAds = document.getElementById('gardenaecondev_show_ads')
        getReult.forEach((elementAds,index) => {
            if(elementAds[0].orientation == 'HORIZONTAL'){
                console.log(elementAds[0])
                maxNum = count
                addAdsElements.push({
                    base64: elementAds[0].base64,
                    name: elementAds[0].image_name,
                    url: elementAds[0].url
                })
                count ++
            }
        });
        while(showCount < 4){
            getNumerShow = Math.floor(Math.random() * ((maxNum - 1) - minNum) + minNum)
            setAds.innerHTML += `
            <div class="wizzle-padding wizzle-col-12 wizzle-text-center">
            <a href="${addAdsElements[getNumerShow].url}">
                <img src="${addAdsElements[getNumerShow].base64}" alt="${addAdsElements[getNumerShow].image_name}" class="wizzle-width-full">
            </a>
            </div>
            ` 
            showCount++
        }