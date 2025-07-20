const porcentFill = document.querySelector('#porcentFill')
const porcentText = document.querySelector('#porcentText')
const porcentParagraph = document.querySelector('#porcentParagraph')
const porcentTitle = document.querySelector('#porcentTitle')
const homeButton = document.querySelector('#homeButton')

let intervalId;

async function populateDatabase() {
    await axios.get('/api/populate')
}

async function reloadPercent() {
    try {
        const response = await axios.get('/api/populate/check')

        const data = response.data
    
        const porcent = (data.current / data.total) * 100
        
        porcentFill.style.width = `${porcent}%`;
    
        porcentText.textContent = `${Math.floor(porcent)}%`;

        if (porcent === 100) {
            porcentTitle.innerHTML = 'O banco de dados foi devidamente populado'
            porcentParagraph.innerHTML = 'Volte para página inicial para ver os dados dos deputados'
            homeButton.classList.remove('hidden')

            clearInterval(intervalId)
        }
    } catch (error) {
        console.error('Erro ao buscar porcentagem:', error)
    }
}

populateDatabase().then(() => {
    intervalId = setInterval(reloadPercent, 6000);
})