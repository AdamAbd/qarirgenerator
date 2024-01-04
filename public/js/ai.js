
function accordian(event, accordian){
    const labelKelas = accordian;
    const cardAccordion = document.querySelector(`#${labelKelas} .accordion-animator`);

    if(cardAccordion.classList.contains("h-auto")){
        cardAccordion.classList.remove('px-8')
        cardAccordion.classList.remove('py-4')
        cardAccordion.classList.remove('h-auto')

        cardAccordion.classList.add("h-[0px]");
    } else {
        cardAccordion.classList.add("px-8");
        cardAccordion.classList.add("py-4");
        
        cardAccordion.classList.remove("h-[0px]");
        
        cardAccordion.classList.add("h-auto");
    }

}

function onActiveSelector(selector){
    if (selector.textContent != "Halal Guaranteed"){
        selector.classList.add('text-text-light')
        selector.classList.add('font-medium')
        
        selector.classList.remove('text-primary')
        selector.classList.remove('font-bold')
    }

    selector.querySelector(".branch").classList.remove("bg-primary")
    selector.querySelector(".branch").classList.add("bg-white")
}

function animatorSelector(selector, section, nextSection){
    
    if (window.scrollY >= nextSection.offsetTop) {
        onActiveSelector(selector)
    } else if(window.scrollY >= section.offsetTop) {
        selector.classList.remove('text-text-light')
        selector.classList.remove('font-medium')

        selector.classList.add('text-primary')
        selector.classList.add('font-bold')

        selector.querySelector(".branch").classList.add("bg-primary")
        selector.querySelector(".branch").classList.remove("bg-white")
    } else if (window.scrollY <= section.offsetTop){
        onActiveSelector(selector)
    }
}

async function animatorSideBar(){
    const about = document.querySelector('#about-lk');
    const curriculum = document.querySelector('#curriculum-lk');
    const learningPhase = document.querySelector('#learning-phase-lk');
    const provenWethodology = document.querySelector('#proven-wethodology-lk');
    const halalGuaranted = document.querySelector('#halal-guaranted-lk');
    const alumni = document.querySelector('#alumni-lk');
    const countryFees = document.querySelector('#country-fees-lk');
    const faq = document.querySelector('#faq-lk');

    const aboutBag = document.querySelector('#about');
    const curriculumBag = document.querySelector('#curriculum');
    const learningPhaseBag = document.querySelector('#learning-phase');
    const provenWethodologyBag = document.querySelector('#proven-wethodology');
    const halalGuarantedBag = document.querySelector('#halal-guaranted');
    const alumniBag = document.querySelector('#alumni');
    const countryFeesBag = document.querySelector('#country-fees');
    const faqBag = document.querySelector('#faq');


    animatorSelector(about, aboutBag, curriculumBag);
    animatorSelector(curriculum, curriculumBag, learningPhaseBag);
    animatorSelector(learningPhase, learningPhaseBag, provenWethodologyBag);
    animatorSelector(provenWethodology, provenWethodologyBag, halalGuarantedBag);
    animatorSelector(halalGuaranted, halalGuarantedBag, alumniBag);
    animatorSelector(alumni, alumniBag, countryFeesBag);
    animatorSelector(countryFees, countryFeesBag, faqBag);
    animatorSelector(faq, faqBag, faqBag * 0);
}

window.addEventListener("scroll", function () {
    animatorSideBar();
});