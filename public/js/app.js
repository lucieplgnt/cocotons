document.querySelectorAll('.rating .stars').forEach((starsContainer) => {
  const stars = starsContainer.querySelectorAll('i');

  stars.forEach((star, index1) => {
      star.addEventListener('click', () => {
          stars.forEach((star, index2) => {
              if (index1 >= index2) {
                  star.classList.add("active");
              } else {
                  star.classList.remove("active");
              }
          });
      });
  });
});
