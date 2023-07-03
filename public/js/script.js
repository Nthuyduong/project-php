
    let selectMenu = document.querySelector(#ctg);
    let headling =document.querySelector(.product-wrapper);

    selectMenu.addEventListener("change", function(){
        let categoryName = this.value;
                
        let http = new XMLHttpRequest();

        http.onload = function()
        {
            if(this.readyState == 4 && this.status ==  200)
            {
                let response = JSON.parse(this.responseText);
                let out = "";
                for (let item of response)
                {
                    out += `
                        // product list will show here
                    `;
                }
                container.innerHTML = out;
            }
        }

        // use POST http method to send request to the File
        http.open('POST', "script.js");
        http.send("category = " + categoryName);

    })
