class Calculadora {
    async sumar(num1, num2) {
        let total = 0;
        const HTMLResponse = document.querySelector("#app");
        await fetch("http://127.0.0.1:8000/api/addition", {
            method: "POST",
            body: JSON.stringify({
                numero1: num1,
                numero2: num2,
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8",
            },
        })
            .then((data) => data.json())
            .then((res) => {
                console.log(res.response);

                HTMLResponse.innerHTML = `<div id="totalfinal"> El total es: ${res.response} </div>`
            })

            //.then((response) => response.json())
            //.then(json => console.log(json.response))
            .catch((error) => {
                console.error("Error:", error);
            });


        return total;

    }


    async restar(num1, num2) {
        let total = 0;
        const HTMLResponse = document.querySelector("#app");
        await fetch("http://127.0.0.1:8000/api/subtraction", {
            method: "POST",
            body: JSON.stringify({
                numero1: num1,
                numero2: num2,
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8",
            },
        })
            .then((data) => data.json())
            .then((res) => {
                console.log(res.response);

                HTMLResponse.innerHTML = `<div id="totalfinal"> El total es: ${res.response} </div>`
            })

            //.then((response) => response.json())
            //.then(json => console.log(json.response))
            .catch((error) => {
                console.error("Error:", error);
            });


        return total;

    }

    async dividir(num1, num2) {
        let total = 0;
        const HTMLResponse = document.querySelector("#app");
        await fetch("http://127.0.0.1:8000/api/split", {
            method: "POST",
            body: JSON.stringify({
                numero1: num1,
                numero2: num2,
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8",
            },
        })
            .then((data) => data.json())
            .then((res) => {
                console.log(res.response);

                HTMLResponse.innerHTML = `<div id="totalfinal"> El total es: ${res.response} </div>`
            })

            //.then((response) => response.json())
            //.then(json => console.log(json.response))
            .catch((error) => {
                console.error("Error:", error);
            });


        return total;

    }

    async multiplicar(num1, num2) {
        let total = 0;
        const HTMLResponse = document.querySelector("#app");
        await fetch("http://127.0.0.1:8000/api/multiplication", {
            method: "POST",
            body: JSON.stringify({
                numero1: num1,
                numero2: num2,
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8",
            },
        })
            .then((data) => data.json())
            .then((res) => {
                console.log(res.response);

                HTMLResponse.innerHTML = `<div id="totalfinal"> El total es: ${res.response} </div>`
            })

            //.then((response) => response.json())
            //.then(json => console.log(json.response))
            .catch((error) => {
                console.error("Error:", error);
            });


        return total;

    }
}
