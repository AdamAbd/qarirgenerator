function animateOurImpact(targetValue, duration) {
    const ourImpact = document.getElementById('our-impact');
    const startValue = 0;
    const increment = 1;
    const interval = Math.floor(duration / (targetValue - startValue));

    // Fungsi rekursif untuk mengupdate nilai dan memanggil dirinya sendiri

    function updateCounter(currentValue) {
        ourImpact.textContent = currentValue;

        if (currentValue < targetValue) {
            setTimeout(() => {
                updateCounter(currentValue + increment);
            }, interval);
        }

        if(currentValue == 3000){
            ourImpact.textContent = currentValue + " ++";
        }
    }

    updateCounter(startValue);
}

// nilai target 3000 dan durasi 3000 milidetik
animateOurImpact(3000, 3000);

const root = document.documentElement;
const marqueeContents = document.querySelectorAll("ul[class^='marquee-content']");

function animateMarquee(marqueeContent) {
  const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
  root.style.setProperty("--marquee-elements", marqueeContent.children.length);

  for (let i = 0; i < marqueeElementsDisplayed; i++) {
    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
  }
}

marqueeContents.forEach((marqueeContent) => {
  animateMarquee(marqueeContent);
});
