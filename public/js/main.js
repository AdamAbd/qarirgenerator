const jadwalData = [
    {
        info: "2x dalam seminggu",
        jadwal: [
            "Kamis, 19.30 - 21.30 (UTC+7)",
            "Sabtu, 10.30 - 12.30 (UTC+7) or Sabtu, 15.30 - 17.30 (UTC+7)"
        ]
    },
    {
        info: "2x dalam seminggu",
        jadwal: [
            "Kamis, 19.30 - 21.30 (UTC+7)",
            "Sabtu, 10.30 - 12.30 (UTC+7) or Sabtu, 15.30 - 17.30 (UTC+7)"
        ]
    }
]

const brandingData = [
    {
        person: "A",
        flight: "A",
        emote: "A",
        emote: "A",
        earth: "A"
    },
    {
        person: "B",
        flight: "B",
        emote: "B",
        emote: "B",
        earth: "B"
    },
    {
        person: "C",
        flight: "C",
        emote: "C",
        emote: "C",
        earth: "C"
    },
    {
        person: "D",
        flight: "D",
        emote: "D",
        emote: "D",
        earth: "D"
    },
    {
        person: "E",
        flight: "E",
        emote: "E",
        emote: "E",
        earth: "E"
    },
    {
        person: "F",
        flight: "F",
        emote: "F",
        emote: "F",
        earth: "F"
    }
]

function jadwal(labelKelas, cardClass){
    const Info = cardClass.querySelector('#infoJadwal');
    const listJadwal = cardClass.querySelector('#listJadwal').querySelectorAll('li');

    Info.innerHTML = jadwalData[labelKelas].info;

    listJadwal.forEach(function (nilai, indeks) {
        nilai.innerHTML = jadwalData[labelKelas].jadwal[indeks];
    });
}

function personalBranding(labelKelas, cardClass){
    const person = cardClass.querySelector('#person');
    const flight = cardClass.querySelector('#flight');
    const emote = cardClass.querySelector('#emote');
    const earth = cardClass.querySelector('#earth');

    person.innerHTML = brandingData[labelKelas].person;
    flight.innerHTML = brandingData[labelKelas].flight;
    emote.innerHTML = brandingData[labelKelas].emote;
    earth.innerHTML = brandingData[labelKelas].earth;
}

function jadwalKelas(event) {
    const labelKelas = event.target.dataset.label;
    const cardClass = event.target.parentNode.parentNode;
    const parentElement = event.target.parentNode;

    const btnJadwalKelas = parentElement.querySelectorAll('.jadwalKelas');

    btnJadwalKelas.forEach((e) => {
        if (e.classList.contains('bg-primary')) {
            e.classList.remove('bg-primary')
            e.classList.remove('text-white')

            e.classList.add("border-primary");
            e.classList.add("border");
            e.classList.add("text-primary");
        }
    })

    event.target.classList.add('bg-primary');
    event.target.classList.add('text-white');

    if(event.target.dataset.title === "kelas"){
        jadwal(labelKelas, cardClass);
    } else {
        personalBranding(labelKelas, cardClass);
    }

}

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
