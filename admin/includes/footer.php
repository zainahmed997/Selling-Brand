</div>

    </div>

    <script>

        function toggleMenu(){

            let toggle = document.querySelector('.toggle');

            let navigation = document.querySelector('.navigation');

            let main = document.querySelector('.main');

            toggle.classList.toggle('active');

            navigation.classList.toggle('active');

            main.classList.toggle('active');

        }



        const counters = document.querySelectorAll('.numbers');

        counters.forEach((counter) => {

            counter.innerText = '0';



            const updateCounter = () => {

                const target = +counter.getAttribute('data-target');

                const c = +counter.innerText;



                const increment = target/250;



                if(c < target) {

                    counter.innerText = `${Math.ceil(c + increment)}`;

                    setTimeout(updateCounter, 2);

                }

            };

            updateCounter();

         });



        //  const rangeVal = document.getElementById("rangeVal");

        //  const discount = document.getElementById("discount");

        //  discount.oninput = (()=>{

        //     let value = discount.value;

        //     rangeVal.textContent = value;

        //  });

    </script>

</body>

</html>