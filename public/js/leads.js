// Leads

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

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 14,
        responsiveClass: true,
        autoWidth: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        URLhashListener: true,
        dots: false,
        dotsData:true,
        dotsContainer: '.owl-dots',
    });
    // $('.owl-carousel').owlCarousel({
    //     margin: 14,
    //     loop: true,
    //     autoWidth: true,
    //     items: 2,
    //     autoplay: true,
    //     URLhashListener: true,
    //     dots: false,
    //     dotsData:true,
    //     dotsContainer: '.owl-dots',
    // });
});


