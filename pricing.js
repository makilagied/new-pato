const tagPricing = document.getElementById('add-investment');
const addInvestButton = document.getElementById('invest-btn');
const investHeading = document.getElementById('invest-heading');


const weekPackButton = document.getElementById('week-pack');
const monthPackButton = document.getElementById('month-pack');
const quarterPackButton = document.getElementById('quarter-pack');
const halfYearPackButton = document.getElementById('half-year-pack');
const yearPackButton = document.getElementById('year-pack');






const showInvestmentModal = () => {
    tagPricing.style.display = 'block';
    addInvestButton.style.display = 'none';
    investHeading.innerHTML = `
    <h2 class='h1'> Choose your Investment plan </h2>
    `
}









addInvestButton.addEventListener('click', showInvestmentModal );