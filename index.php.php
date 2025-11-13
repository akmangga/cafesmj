<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe SMJ SMM ABC</title>
  <style>
    body {
      font-family: 'Tahoma';
      margin: 0;
      background: linear-gradient(to bottom right, #fff8e1, #fff);
      color: #333;
      overflow-x: hidden;
    }
    header {
      position: sticky; top: 0; z-index: 40;
      display: flex; align-items: center; justify-content: space-between;
      padding: 30px 10px; gap: 12px;
      font-size: 2em;
      background: rgba(255,179,0,0.95);
      color: white; box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    }
    header .brand {font-weight: 800; font-size: 1.15rem; display: flex; gap: 8px; align-items: center;}
    nav {display: flex; gap: 10px; align-items: center;}
    .nav-btn {
      background: transparent; border: 0; color: white; padding: 8px 12px;
      border-radius: 10px; font-weight: 600; cursor: pointer;
    }
    .nav-btn:hover {background: rgba(255,255,255,0.12);}
    .hero {position: relative; width: 100%; height: 350px; overflow: hidden;}
    .hero img {position: absolute; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.2s ease-in-out;}
    .hero img.active {opacity: 1;}
    .container {max-width: 1000px; margin: 40px auto; padding: 0 20px;}
    .filter-buttons {display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;}
    .filter-buttons button {
      border: none; background: #ffe082; color: #333;
      padding: 10px 18px; border-radius: 20px; cursor: pointer;
      font-weight: 600; transition: all 0.3s;
    }
    .filter-buttons button.active, .filter-buttons button:hover {background: #ffb300; color: white;}
    .grid {display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;}
    .card {
      background: white; border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {transform: scale(1.03); box-shadow: 0 8px 20px rgba(0,0,0,0.2);}
    .card img {width: 100%; height: 180px; object-fit: cover;}
    .card h3 {margin: 10px 15px 5px;}
    .card p {margin: 0 15px 15px; color: #666; font-size: 0.9em;}
    .tempah-btn {
      display: block;
      width: 80%;
      margin: 10px auto 15px;
      background: #ffb300;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: .3s;
    }
    .tempah-btn:hover {background: #e68900;}
    footer {text-align: center; padding: 20px; font-size: 0.9em; color: #777;}
  </style>
</head>
<body>
   <?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Your reservation was successfully added!');</script>";
}
?>

<header>
  <div class="brand"padding: 30px;>Cafe SMJ SMM ABC</div>
  <nav>
        <a href="tempah.php" target="_blank"><button class="nav-btn">Reserve Now</button></a>
        <a href="location.html" target="_blank"><button class="nav-btn">Location</button></a>
    <a href="contactus.html" target="_blank"><button class="nav-btn">Contact Us</button></a>
    <a href="logout.php"><button class="nav-btn">Log Out</a>
    </nav>
</header>





<!-- Hero -->
<section class="hero">
  <img src="img/sabah.jpeg" class="active" alt="">
  <img src="img/opening.jpeg" alt="">
</section>








</div>
         <div class="container">
  <div class="filter-buttons">
   <button onclick="filterCategory('menu')">Menu</button>
   <button onclick="filterCategory('drinks')">Drinks</button>
   <button onclick="filterCategory('desserts')">Desserts</button>
<button onclick="filterCategory('add')">Add On</button>
  </div>


<script>
function filterCategory(category) {
  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
    if (category === 'all' || card.dataset.category === category) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
}
</script>

<script>
  let slides = document.querySelectorAll('.hero img');
  let current = 0;
  setInterval(() => {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 3500);


  const buttons = document.querySelectorAll('.filter-buttons button');
  const cards = document.querySelectorAll('active');
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const category=btn.dataset.category;
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      card.forEach(card=>{
        card.style.display=card.dataset.category ===category ? 'block' : 'none';
      });
     });
    });


</script>



        <div class="grid">
            <div class="card" data-category="menu">
               <img src="img/SINALAUBAKAS.jpeg">
                <h3>SINALAU BAKAS</h3>
                <P>Price: RM10.00/kg</P>
                <p>Info: Sinalau Bakas, Traditional Smoked Meat of Sabah That Entices the Appetite.
                    Sinalau Bakas, or smoked wild boar meat, is a traditional dish highly valued by the Kadazandusun
                    community in Sabah. The term ‘Sinalau’ means ‘smoked’ in the local language, while ‘Bakas’ refers to
                    ‘wild boar’.
                </p>
            </div>

             <div class="card" data-category="menu">
                <img src="img/BAROBBO.jpeg">
                <h3>BAROBBO</h3>
                <p>Price: RM2.50</p>
                <p>Info: Barobbo is a corn porridge cooked with rice, coconut milk, and fresh local ingredients. It has
                    a soft texture and a savory taste, making it a perfect choice for breakfast or as a main dish,
                    especially during cold weather. Besides being filling, Barobbo also embodies the Sabah community’s
                    appreciation of the natural resources around them.
                </p>

            </div>
            <div class="card" data-category="menu">
                <img src="img/TUHAU.jpeg">
                <h3>TUHAU</h3>
                <p>Price: RM5.00</p>
                <p>Info: Tuhau is a common traditional side dish of the Kadazandusun ethnic group, which is made of wild
                    ginger and is scientifically known as Etlingera coccinea. The ginger is finely chopped and then
                    mixed with ingredients like lime juice or vinegar for acidity, diced chilis, diced garlic, and salt.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/HINAVA.jpeg">
                <h3>HINAVA</h3>
                <p>Price: RM12.00</p>
                <p>Info: Hinava is a celebration of simplicity and freshness, showcasing the rich bounty of Sabah's
                    seas. This delicacy is prepared using raw fish, typically mackerel, known locally as hinava sada
                    tongii, which is cured in lime juice. The acidity from the lime juice cooks the fish without the
                    need for heat, resulting in a refreshing and tangy flavour that is both invigorating and delightful.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/PINASAKAN.jpeg">
                <h3>PINASAKAN</h3>
                <p>Price: RM12.00</p>
                <p>Info: Pinaasakan is one of the traditional foods in Sabah.
                    It is a traditional favourite dish of the Kadazan-Dusun ethnic group. Pinaasakan, also known as
                    ‘Pinasakan’, is made from fish meat mixed with several ingredients to enhance its flavour. This dish
                    can also be stored for several days, depending on the conditions.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/PIARENAHMANUK.jpeg">
                <h3>Piaren Ah Manuk</h3>
                <p>Price: RM6.00</p>
                <p>Info: Piaren ah Manuk is a traditional dish of the Iranun ethnic group in Sabah, particularly in the
                    Kota Belud area.
                    It is a type of chicken curry cooked with sautéed spices and grated coconut, then simmered in
                    coconut milk.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/AMBUYAT.jpeg">
                <h3>AMBUYAT</h3>
                <p>Price: RM3.50</p>
                <p>Info: Ambuyat is Brunei’s national dish made from sago starch, with a sticky texture eaten using bamboo sticks and dipped into sour, spicy, or savory sauces. Though bland on its own, it is a cultural staple enjoyed communally in Brunei, Sabah, Sarawak, and Labuan.
</p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/LATOK.jpeg">
                <h3>LATOK</h3>
                <p>Price: RM4.00</p>
                <p>Info: Latok is a type of green seaweed with bead-like structures that resemble grapes.
                    Scientifically known as Caulerpa lentillifera, it is also called green caviar, ar-arosep, or
                    umi-budō (sea grapes in Japanese). Along the coastal areas of the Philippines and the Okinawa
                    Islands in Japan, this seaweed is cultivated, harvested, and eaten raw and fresh.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/BAKKUTTEH.jpeg">
                <h3>BAK KUT TEH</h3>
                <p>Price: RM12.00</p>
                <p>Info: The boiling aromatic pot of tender soft bak kut (pork ribs) simmering in hot claypot and
                    spices, it is one of the hawker foods that locals have enjoyed for breakfast and supper. Bak kut teh
                    will keep your tummies warm and cravings satisfied.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/MULONG.jpeg">
                <h3>ULAT MULONG</h3>
                <p>Price: RM5.00</p>
                <p>Info: Ulat Mulong, or butod, is a traditional delicacy from Sabah made from the larvae of the sago palm weevil. These larvae are creamy, rich in protein, and can be eaten raw, roasted, or cooked with spices. Known for their soft texture and buttery taste, Ulat Mulong are often considered a local delicacy and a source of pride in Sabah’s indigenous cuisine, especially among the Kadazan-Dusun and Murut communities.</p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/SIPUTBABI.jpeg">
                <h3>SIPUT BABI</h3>
                <p>Price: RM4.00</p>
                <p>Info: Siput Babi is a traditional Malaysian snack made from crispy pastry shaped like a snail shell, hence its name, which means “snail” in Malay. Despite the name, it doesn’t contain pork or snail. The pastry is usually deep-fried until golden brown and filled with sweet, sticky caramelized sugar and peanuts. Crunchy on the outside and sweet inside, Siput Babi is a popular festive treat, especially during Chinese New Year.</p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/LINOPOT.jpeg">
                <h3>LINOPOT</h3>
                <p>Price: RM1.50</p>
                <p>Info: Rice is the staple food of Malaysians, who may see rice as something ordinary. However, rice
                    holds a special place in Borneo. Kadazandusun people, the largest indigenous group of Sabah, believe
                    that rice has soul because the presence of paddy spirits, Bambarayon. Linopot is rice being packed
                    and wrapped nicely in a big leaf, a traditional takeaway of Sabah natives. The word “Linopot” means
                    packing in Dusun language.
                </p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/BUTOD.jpeg">
                <h3>BUTOD</h3>
                <p>Price: RM4.50</p>
                <p>Info: Known as Butod locally, Sago Grub or Sago Worm is a delicacy, as well as the most disgusting
                    food of Sabah. Junk food always look good, but it does ugly things to your body. Sago Grub is the
                    opposite, it’s an ugly but nutritious food. However, it’s a test of bravery to put this wriggling
                    bug into your mouth.</p>
            </div>
            <div class="card" data-category="menu">
                <img src="img/PORKBELLYBBQ.jpeg">
                <h3>KON LAU MIE</h3>
                <p>Price: RM9.00</p>
                <p>Info: Kon Lou Mee Sasau Sanyuk is a popular noodle dish in Sabah, especially among the Chinese
                    community.
                    It is a variation of kon lou mee, a dry noodle mixed with thick sauce, but served with the addition
                    of roasted pork and a special blend of sauces.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/PUDING.jpeg">
                <h3>PUDING KELAPA</h3>
                <p>Price: RM3.00</p>
                <p>info: It tastes just like other pudding, soft and sweet, but rich with taste of coconut milk. It’s a
                    great dessert in hot day and it’s not oily nor overly sweet.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/KUIHCINCIN.jpeg">
                <h3>KUIH CINCIN</h3>
                <p>Price: RM6.00</p>
                <p>Info: Kuih Cincin is a traditional snack of Brunei-Malay and Bajau people in Sabah State of Malaysia.
                    This sweet and crunchy cookie is enjoyed by many Sabahans as a yummy complement for coffee or tea
                    break.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/PENJARAM.jpeg">
                <h3>PENJARAM</h3>
                <p>Price: RM2.00</p>
                <p>Info: Penjaram is a sweet and round cake with soft and chewy texture. Its edge is crispy, but fluffy
                    and springy toward middle. As pinjaram is made of rice flour, cornflour, sugar, and coconut milk,
                    gobbling up a few delicious pinjaram as your breakfast boosts your energy and mood.</p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/KUIHTELINGABABI.jpeg">
                <h3>KUIH TELINGA BABI</h3>
                <p>Price: RM7.50</p>
                <p>Info: Kuih Telinga Babi, also known as Kuih Peneram in Sabah, is a type of traditional snack popular
                    in many parts of Malaysia.
                    This delicacy is made from rice flour and palm sugar, then deep-fried until golden brown. It gets
                    the name “pig’s ear” from its small, curved shape that resembles a pig’s ear.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/LINOBOKK.jpeg">
                <h3>LINOBOK</h3>
                <p>Price: RM2.50</p>
                <p>Info: Linobok is a type of traditional cake synonymous with the Kadazandusun community in Sabah.
                    This delicacy is wrapped in banana leaves or specific types of leaves that give a unique aroma to
                    its filling.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/AMPLANG.jpeg">
                <h3>AMPLANG</h3>
                <p>Price: RM7.00</p>
                <p>Info: Amplang Snack of Sabah, a Traditional Fish Cracker That Remains Popular.
                    If you have ever visited Sabah, you have likely seen or tried the snack known as Amplang. This
                    crunchy fish cracker, rich in fish flavour, is one of the most popular traditional snacks in the
                    state.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/CAMPIANG.jpeg">
                <h3>CAMPIANG</h3>
                <p>Price: RM6.50</p>
                <p>Info: Kuih Cempiang, also known as Campiang, is a popular traditional delicacy in Sabah.
                    Best enjoyed while still warm, it is well-known as one of the most delicious breakfast options in
                    the state.
                </p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/SERIMUKA.jpeg">
                <h3>SERI MUKA</h3>
                <p>Harga :RM1.50</p>
                <p>Price: Kuih seri muka, sri muka or putri salat (little pretty face cake) is a Malay originally from
                    Malaysia and Banjarese two-layered dessert with steamed glutinous rice forming the bottom half and a
                    green custard layer made with pandan juice (hence the green colour).</p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/LENGGANG.jpeg">
                <h3>KUIH LENGGANG</h3>
                <p>Price: RM2.00</p>
                <p>Info: Kuih Lenggang is a traditional Malaysian dessert made from a soft, green pandan-flavoured crepe filled with sweet grated coconut cooked in palm sugar. The crepe’s fragrant aroma and vibrant colour come from pandan leaves, while the filling gives a rich, caramel-like sweetness. It is often served as a light snack or dessert during tea time and is loved for its soft texture and delightful balance of flavours.</p>
            </div>
            <div class="card" data-category="desserts">
                <img src="img/JALA.jpeg">
                <h3>KUIH JALA</h3>
                <p>Price: RM2.00</p>
                <p>Info: Kuih Jala is a famous snack found in Malaysia. “Kuih” means Cake and “Jala” means Net in Malay
                    language, so it is literally translated to “Net Cake” here. It is named after the pattern that looks
                    like net. It is commonly called Biskut Sarang Semut (Ant’s nest biscuit).</p>
            </div>

              <div class="card" data-category="drinks">
                <img src="img/plain.jpeg">
                <h3>Plain Water</h3>
                <p>Price: RM0.50</p>
            </div>

            <div class="card" data-category="drinks">
                <img src="img/teaO.jpeg">
                <h3>Tea O Ice</h3>
                <p>Price: RM3.00</p>
            </div>

            <div class="card" data-category="drinks">
                <img src="img/coffeeO.jpeg">
                <h3>Coffee O Ice</h3>
                <p>Price: RM3.00</p>
            </div>
              <div class="card" data-category="drinks">
                <img src="img/canned.jpeg">
                <h3>Canned Beverages</h3>
                <p>Price: RM3.00</p>
            </div>
            <div class="card" data-category="add">
                <img src="img/rice.jpeg">
                <h3>Rice</h3>
                <p>Price: RM1.50</p>
            </div>
             <div class="card" data-category="add">
                <img src="img/egg.jpeg">
                <h3>Fried Egg</h3>
                <p>Price: RM2.00 each</p>
            </div>
            <div class="card" data-category="drinks">
                <img src="img/fruits.jpeg">
                <h3>Fruit Juice (orange/ carrot/ apple/ watermelon)</h3>
                <p>Price: RM6.00 each</p>
            </div>
          </script>
          <style>{
          text-align: center;
          padding: 20px;
          font-family: Tahoma;
          font-size: 15px;

        </style>

          <footer><br>© 2025 Ma’s Website. All rights reserved</footer>


<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

</body>
</html>