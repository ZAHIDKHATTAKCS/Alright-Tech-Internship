
    // ################  JavaScript for read more and read less in cards started here #############
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".chef-card");

  cards.forEach(card => {
      const descriptionElement = card.querySelector(".chef-description");
      const fullText = descriptionElement.innerHTML.trim();
      const charLimit = 50;

      // Set initial fixed height of the card
      card.style.height = "320px";
      card.style.overflow = "hidden"; // Prevent content overflow

      // If the content is more than 50 characters, show 'Read More' functionality
      if (fullText.length > charLimit) {
          const truncatedText = fullText.slice(0, charLimit);

          // Create "Read More" button
          const readMoreSpan = document.createElement("span");
          readMoreSpan.classList.add("read-more-btn");
          readMoreSpan.innerHTML = '<a href="#" class="read-more-link">Read More</a>';

          // Update description with truncated text and "Read More"
          descriptionElement.innerHTML = truncatedText;
          descriptionElement.appendChild(readMoreSpan);

          // Add event listener for the "Read More" button
          const readMoreLink = card.querySelector(".read-more-link");
          readMoreLink.addEventListener("click", function (e) {
              e.preventDefault();
              if (readMoreLink.innerText === "Read More") {
                  descriptionElement.innerHTML = fullText + ' <a href="#" class="read-more-link">Read Less</a>';
                  card.style.height = "auto"; // Set card height to auto
                  attachReadLessListener(card, fullText, truncatedText, readMoreSpan);
              }
          });
      }
  });

  // Function to attach "Read Less" functionality
  function attachReadLessListener(card, fullText, truncatedText, readMoreSpan) {
      const readLessLink = card.querySelector(".read-more-link");
      readLessLink.addEventListener("click", function (e) {
          e.preventDefault();
          if (readLessLink.innerText === "Read Less") {
              const descriptionElement = card.querySelector(".chef-description");
              descriptionElement.innerHTML = truncatedText;
              descriptionElement.appendChild(readMoreSpan); // Reattach the "Read More" button
              card.style.height = "320px"; // Reset card height to 500px
          }
      });
  }
});


// ################  JavaScript for read more and read less in cards ended here #############