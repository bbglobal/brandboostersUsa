const form = document.getElementById('form');
const button = document.getElementById('add-section');
let fieldCounter = 1; // Initialize the counter

button.addEventListener('click', () => {
    // Increment the field counter for each new section
    fieldCounter++;

    // Create the container for the 'sub' input
    const subContainer = document.createElement('div');
    subContainer.classList.add('input-group', 'input-group-outline', 'my-3');

    const subInput = document.createElement('input');
    subInput.type = 'text';
    subInput.name = `sub${fieldCounter}`; 
    subInput.classList.add('form-control');
    subInput.placeholder = 'Sub Heading';

    subContainer.appendChild(subInput);

    // Create the container for the 'para' textarea
    const paraContainer = document.createElement('div');
    paraContainer.classList.add('input-group', 'input-group-outline', 'my-3');

    const textarea = document.createElement('textarea');
    textarea.cols = '30';
    textarea.rows = '10';
    textarea.name = `para${fieldCounter}`; 
    textarea.classList.add('form-control');
    textarea.placeholder = 'Paragraph';

    paraContainer.appendChild(textarea);

    // Append both containers to the form
    form.appendChild(subContainer);
    form.appendChild(paraContainer);
});



// Select all image containers with the class "image-container" within the "web" section
const imageContainers = document.querySelectorAll(
    ".img.filter.web .image-container"
);

// Loop through each image container and add event listeners
imageContainers.forEach((container) => {
    const image = container.querySelector("img");

    container.addEventListener("mouseover", () => {
        const imageHeight = image.offsetHeight;
        const containerHeight = container.offsetHeight;

        if (imageHeight > containerHeight) {
            image.style.transition = "transform 5s ease-in-out 0s";
            image.style.transform = `translateY(-${imageHeight - containerHeight
                }px)`;
        }
    });

    container.addEventListener("mouseout", () => {
        image.style.transition = "transform 5s ease-in-out 0s";
        image.style.transform = "translateY(0)";
    });
});

$(document).ready(function () {
    // Set the "web" category button as active by default
    $(".filter-button[data-filter='web']").addClass("active");

    // Show only the "web" items by default
    $(".filter").not(".web").hide();
    $(".filter.web").show();

    $(".filter-button").click(function () {
        var value = $(this).attr("data-filter");

        // Remove the active class from all buttons and add it to the clicked button
        $(".filter-button").removeClass("active");
        $(this).addClass("active");

        if (value == "all") {
            $(".filter").show("1000");
        } else {
            $(".filter")
                .not("." + value)
                .hide("3000");
            $(".filter")
                .filter("." + value)
                .show("3000");
        }
    });

    $(".testwraper").slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        infinite: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: "linear",
    });
    $(".partnerslider").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        autoplaySpeed: true,
        speed: 1500,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});


