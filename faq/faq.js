document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.question button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const faq = button.nextElementSibling;

            // Close all other FAQ sections except the one clicked
            document.querySelectorAll('.question p.show').forEach(openFaq => {
                if (openFaq !== faq) {
                    openFaq.classList.remove('show');
                    openFaq.previousElementSibling.querySelector('button').classList.remove('rotate');
                }
            });

            // Toggle the clicked FAQ section
            faq.classList.toggle('show');
            button.classList.toggle('rotate');
        });
    });
});
