const data = [
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

    const Info = cardClass.querySelector('#info');
    const listJadwal = cardClass.querySelector('#listJadwal').querySelectorAll('li');

    event.target.classList.add('bg-primary');
    event.target.classList.add('text-white');

    Info.innerHTML = data[labelKelas].info;

    listJadwal.forEach(function (nilai, indeks) {
        nilai.innerHTML = data[labelKelas].jadwal[indeks];
    });

}