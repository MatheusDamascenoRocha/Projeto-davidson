<?php
session_start();
if(!isset($_SESSION['logado'])){
  header("location:login.php");
  session_destroy();
}
if (isset($_GET['sair'])) {
  header('location:login.php');
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up-Driver</title>
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
</head>
<body>
    <header>
      <div class="header-logo">
        <img src="img/logo.png" alt="logo" class="logo">
        <h1><em>Up-Driver</em></h1>
      </div>
      <div class="navbar">
        <a href="?sair">Sair</a>
        <a href="home.php">Home</a>
        <a href="">Compras</a>
        <a href="">Serviços</a>
      </div>
    </header>
    <main>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, reprehenderit. Saepe iusto qui asperiores porro soluta provident fugiat ullam quia suscipit commodi dolorem facere sint inventore adipisci, pariatur perspiciatis ut?
        Nihil ab incidunt sequi impedit dolorum harum facere ut illo, eveniet minus laborum accusantium atque possimus sapiente illum quis et quae! Aperiam porro vero velit et voluptatibus sunt impedit ut.
        Vel, quisquam. Optio sit veritatis nemo. Neque perferendis adipisci voluptas enim repudiandae aliquam consequatur nisi ipsam quisquam, dolore dolorem! Perspiciatis nesciunt explicabo corrupti quis minima, facere similique. Praesentium, odio provident.
        Qui quaerat soluta commodi tenetur laboriosam! Accusantium, labore vitae! Magni earum voluptate facilis ea omnis quae iste vero. Voluptates maxime dolores sunt architecto obcaecati accusamus facilis dolor modi, magnam fugiat.
        Itaque laborum consequatur sint, quidem maxime consectetur facere error praesentium voluptatum quam ad. Tempore ullam provident perferendis fugit et aperiam assumenda magnam distinctio, cum recusandae placeat minus. Eaque, in veritatis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam delectus ab vel minus mollitia doloribus a sequi accusantium eius, enim hic reprehenderit esse perspiciatis quis eos totam quidem modi sit!
        Aliquid iure quo quos, quae, impedit vitae veniam dolores corrupti repellendus veritatis eveniet dolore molestias. Neque enim quis expedita molestiae, qui, quibusdam, nam voluptatem ut nostrum nulla perferendis adipisci assumenda?
        Unde optio et dolor dolorem quod asperiores consectetur similique porro cumque, laudantium facere, culpa est recusandae voluptatibus aliquid adipisci amet voluptatem laboriosam sunt! Voluptates similique expedita eos, ipsa aliquam quos.
        Officia laudantium, non nobis explicabo autem velit et tempore numquam minus vitae fuga laborum tenetur quas expedita libero vero voluptate labore reiciendis quia, molestias exercitationem nisi corporis pariatur neque? Aliquid.
        Natus, repellendus vitae. Itaque vitae ad obcaecati ullam ab voluptate, doloribus voluptas aspernatur laboriosam exercitationem ex, labore nam reprehenderit libero corrupti ratione aperiam laudantium est illum dolore nemo fugit quis!
        Laudantium fugit eligendi ea eum nulla iure itaque enim aperiam officia, omnis distinctio consectetur quia laboriosam sapiente perferendis accusantium delectus, excepturi culpa ipsam quo. Ducimus ipsum quo esse quaerat atque!
        Velit, consequuntur? Quam at harum illum ipsam quas exercitationem officiis. Ratione repellendus cumque omnis eaque aspernatur aut totam maiores molestiae itaque id, sit in aperiam sequi quisquam iusto incidunt eum.
        Laudantium, quasi nesciunt. Obcaecati voluptatibus reiciendis deleniti optio odit cum iusto quasi expedita, corrupti laborum quia eaque. Sapiente tempora esse saepe eius illum nisi voluptate aut maxime, quasi ex. Ab.
        Expedita numquam cupiditate quis iusto optio ipsam qui officia explicabo sit laboriosam iste, labore et quam alias non sed eligendi hic impedit mollitia suscipit blanditiis ad voluptatem? Deserunt, perspiciatis pariatur?
        Quibusdam temporibus amet nobis ipsa ducimus expedita optio. Quasi tempore repellat dicta, sed similique maiores ipsa nemo magnam minima autem, debitis dolorem asperiores consequuntur ab accusantium aperiam. Nesciunt, voluptatem totam.
        Nobis modi nostrum dolor blanditiis enim dignissimos quisquam esse aspernatur laudantium? Quas laudantium, molestias ex consequatur magni hic quibusdam necessitatibus velit, porro alias iure quaerat optio dolorem distinctio, deleniti sed.
        Eos labore provident minus dolores facilis tempora dolor, aut, molestias cum, reprehenderit aspernatur officia quisquam! Neque assumenda nisi veniam saepe rerum omnis eveniet laborum illo, reprehenderit dolorem, esse, necessitatibus libero.
        Aperiam similique saepe recusandae totam. Fugit perspiciatis omnis optio veritatis eos consequatur sequi aut consectetur cupiditate quibusdam saepe quae eum accusamus, nam quia non voluptatum. Tenetur officiis voluptatum aperiam fugit!
        Ipsa blanditiis maxime quae illum cumque ad quam numquam delectus reprehenderit, aut non eos error pariatur veniam sint asperiores fugiat saepe nisi quasi, dicta ab veritatis molestiae itaque. Assumenda, alias!
        Quas quibusdam quae, voluptas inventore explicabo atque sint distinctio! Doloremque, soluta nulla! Dolorum nesciunt nisi atque sit tenetur nostrum quod fuga excepturi corporis qui neque, nemo numquam adipisci doloribus in.
        Iste molestiae iure perferendis error illo suscipit sapiente possimus velit dicta, facere neque eos ducimus, nisi magnam voluptate molestias exercitationem quis unde ab laboriosam labore beatae maxime dolores. Asperiores, provident!
        Enim doloremque iste praesentium recusandae consequuntur ad repellendus iure eligendi veritatis. Similique itaque distinctio voluptate quidem fugit quod voluptatem delectus pariatur, nulla qui tenetur asperiores maxime unde dolores officia fugiat.
        Mollitia dicta sequi dolorum, pariatur sint commodi voluptates quidem nobis! Atque iste aperiam, nemo officia molestiae neque reprehenderit ex itaque possimus. Impedit commodi quos dicta quod corporis iusto tenetur officia.
        Animi assumenda voluptatum veritatis non eligendi tempora illo odit corrupti ducimus, magnam quibusdam voluptate alias nesciunt, voluptatibus, excepturi quas? Aliquid sed ipsam cum corporis quos vel inventore recusandae eius mollitia.
        Error voluptas magni aspernatur dolor, quo minima eaque sit at eius omnis. Ipsam doloribus rerum dolorum id fugiat blanditiis dolore at odit voluptate quisquam! Maxime dolorum ex necessitatibus laboriosam provident.
        Culpa ipsum ea cum necessitatibus labore sequi tempora delectus. Minima voluptatibus excepturi cupiditate ex quasi perferendis sint veritatis id, perspiciatis totam, autem facilis, tempore consectetur! Consequatur ut laboriosam minus maiores.
        Assumenda quibusdam tempore perferendis minima quod, quisquam consequatur eum veniam quaerat doloribus numquam! Saepe eveniet asperiores rerum? Assumenda animi labore, eius repellat, magni fuga ea sit sapiente eveniet vero quam.
        Voluptas nulla omnis quis ullam consectetur ducimus quia, veniam laudantium asperiores rem. Possimus saepe quis dicta, neque expedita quae eaque commodi quaerat, iusto voluptatum minus ipsam enim ipsum beatae mollitia.
        Autem quos deserunt repellendus eum! Quibusdam quidem odio, distinctio magnam expedita eligendi cum sapiente consequatur mollitia adipisci totam, quos facere impedit soluta fuga dolore. Repellendus, odit reiciendis! Cumque, voluptate incidunt?
        Ipsam reprehenderit, quia pariatur facere accusantium numquam dolorem doloremque sequi nostrum quo corrupti cupiditate accusamus. Blanditiis error vero doloremque atque in accusamus soluta provident dolorem architecto dolorum. At, earum dolor.
        Rerum quasi unde natus laboriosam? Eligendi, quae iusto? Unde temporibus expedita dicta commodi dolorum deserunt illo corrupti ut consequatur dignissimos? Consectetur provident consequatur voluptatem suscipit placeat quae, tenetur mollitia dicta.
        Soluta autem saepe animi unde. Ipsa deleniti commodi voluptatum laboriosam quos illo iure nulla modi nam numquam. Ratione quibusdam vel iusto perferendis? Officia fuga minima, nostrum eaque voluptate totam facilis!
        Eligendi repudiandae recusandae, cumque, voluptates atque similique dolorum vitae eos veniam numquam aut. Debitis similique iure id facere excepturi velit praesentium consequuntur, doloribus hic mollitia nemo. Unde commodi officiis necessitatibus.
        Eos molestias tempora ad nobis nostrum assumenda ut veniam itaque ea cumque natus rem ex nemo nam quia cupiditate, vel adipisci officiis. Natus molestias, accusamus quam laudantium ab tempora nam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas tenetur possimus illo sapiente, obcaecati beatae neque repudiandae earum vero, illum nostrum iure in pariatur cumque repellat voluptate vitae velit!
        Odio saepe consequuntur quas? Officia eius velit quibusdam. Cupiditate eum, quas excepturi deleniti commodi quo illo hic saepe impedit magni deserunt vitae temporibus earum nobis recusandae harum, consequuntur inventore maxime!
        Assumenda deleniti dolore neque quo, sapiente impedit, non amet ipsam inventore consequuntur vero consequatur molestias, sed harum esse adipisci culpa! Quidem, aspernatur earum a culpa libero molestiae adipisci deleniti provident!
        Possimus, eaque adipisci. Hic ducimus in veniam perspiciatis eveniet numquam sit odio. Vero architecto aut nisi ratione ab recusandae repellat! Magni doloribus rem optio placeat id adipisci mollitia neque voluptas.
        Eum asperiores voluptatem numquam at cupiditate beatae atque error labore enim consequuntur dignissimos ea perferendis minus consectetur deserunt quaerat, saepe aspernatur ex. Quia, in sunt? Similique, ex! Eligendi, dolorum quos.
        Non iste ut hic dolore nam! Id reprehenderit architecto sint ad fugit modi, commodi porro qui nihil culpa earum quod animi omnis quae placeat. Minus ipsam rerum quo aspernatur similique?
        Placeat, consequuntur dolorum! Assumenda expedita, voluptatum libero voluptatibus provident suscipit commodi, eum fuga dolorem quo similique perspiciatis! Dignissimos id similique temporibus, adipisci voluptate consequatur aspernatur perferendis laborum, ab maiores explicabo?
        Earum hic, amet repudiandae ullam sit dicta quos dignissimos. Eveniet quos ipsa praesentium dolores libero officia corrupti. Voluptas nobis incidunt, nihil explicabo quibusdam reprehenderit. Possimus, enim. Fuga corporis explicabo nulla?
        Modi atque quae exercitationem. Sunt soluta voluptatibus accusamus, accusantium nisi vitae est nulla nam cupiditate quas odit natus voluptas aliquid error minus. Nihil reprehenderit omnis dolorum possimus, debitis illo nam.
        Accusamus nemo sit iste cupiditate perspiciatis culpa natus obcaecati porro libero laborum quaerat quidem unde ratione officia nulla facilis, provident praesentium vel iure. Totam incidunt voluptatum quaerat consequatur nihil ratione.
        Dolorum est voluptate maiores odio ea modi. Recusandae suscipit modi explicabo ad laudantium ratione eius, fugit cumque assumenda sequi aperiam velit, facere quisquam! Similique nostrum officia fugiat esse? Itaque, quod.
        Sit nesciunt nam nisi deserunt est expedita tempore accusamus quis, molestiae porro officiis reprehenderit reiciendis aperiam in! Mollitia ducimus esse dicta expedita, dolores accusantium quibusdam rerum ratione illo, recusandae facere?
        Quae eum nostrum dolorem repudiandae expedita suscipit excepturi atque vero. Natus voluptates laboriosam nobis deserunt fugit explicabo ea aliquam placeat dignissimos, neque ratione voluptatum, iure libero, facilis beatae. Saepe, autem.
        Quos sequi at expedita cumque, soluta eum nihil est inventore debitis eveniet consequuntur cum quia, tempore a autem. Et deserunt earum quibusdam laborum necessitatibus tempora deleniti non eligendi repellendus praesentium?
        Illo cupiditate aut distinctio velit officiis, libero eaque expedita soluta exercitationem deserunt, quos quasi culpa eum possimus veritatis facere! Blanditiis necessitatibus reprehenderit ex quo sequi laborum commodi eum mollitia error.
        Maiores facilis harum delectus. Porro sint veritatis assumenda nobis consequuntur quibusdam alias qui reiciendis nam. Numquam ducimus dolores architecto, illum facilis aut nihil beatae mollitia perspiciatis, deleniti quod accusantium perferendis.
        Est soluta quaerat reprehenderit dolores excepturi iure eum culpa rem veniam ipsa dolorum officiis quas totam cum sed impedit dicta repellat consequuntur nam suscipit consectetur ratione corporis, animi deserunt! Consectetur!
        Minima reprehenderit eveniet deserunt in voluptate, pariatur repellendus voluptatem laboriosam architecto expedita facilis! Tempore aliquid harum, reiciendis facere fuga minus, rem molestias numquam repudiandae quis ipsa possimus corrupti. Asperiores, dolore.
        Sunt quaerat ab minus quidem nesciunt, illum odit? Maiores autem voluptatibus quod nihil quam. Perferendis sapiente itaque nesciunt a atque autem eligendi mollitia! Necessitatibus ad quo sed obcaecati minima harum!
        Error porro expedita et omnis esse natus nostrum fugiat labore impedit sapiente! Eos, sequi veritatis voluptatibus iure aperiam dolores culpa explicabo deserunt suscipit doloribus nesciunt voluptatum quibusdam! Omnis, blanditiis quis.
        Voluptas dolore quis laudantium possimus quasi doloremque numquam, autem veritatis laboriosam voluptate at, necessitatibus nemo facilis culpa? Sunt iste distinctio sint officiis natus sequi quo amet, cupiditate perspiciatis dolor omnis?
        In error debitis inventore cupiditate explicabo magni nemo ducimus animi! Sint quas adipisci libero. Deserunt fugiat vel aliquid est. Nemo deleniti nam animi numquam soluta dolore quia quae. Voluptas, aspernatur!
        Dolore quas esse cupiditate sit animi odit cum, quasi fugit expedita tempora ipsam officia aliquam vero laboriosam qui enim pariatur est neque. Esse nostrum numquam, qui itaque doloribus distinctio consequuntur!
        Accusantium nisi eius impedit vel. Quibusdam, natus. Harum incidunt facere nesciunt ex error eaque voluptate culpa ad! Esse, nesciunt officiis. Enim unde perspiciatis distinctio a eaque quam eligendi delectus fugiat.
        Reprehenderit animi cum vitae perspiciatis odit tenetur similique maxime dicta, corporis, pariatur ea rem! Vero nihil corrupti expedita perspiciatis voluptates! Voluptas nihil expedita vel placeat porro. Incidunt ipsam sed sit?
        Dignissimos, blanditiis voluptatum iusto ducimus ullam libero sit, officia, tempore cum expedita impedit? Veritatis, quidem necessitatibus corporis pariatur, quibusdam aperiam mollitia explicabo in illum nemo tenetur dolore perferendis eaque dolor!
        Quam asperiores consequatur, molestias ex voluptas aperiam architecto pariatur quod exercitationem quia porro iusto repellat facilis praesentium suscipit deserunt perspiciatis ab quo sapiente deleniti perferendis autem ullam fugiat saepe! Molestias.
        Nulla rerum accusantium, praesentium nostrum sint sapiente blanditiis? Enim a repudiandae deserunt sed! Minus repudiandae voluptatibus voluptatem porro sapiente ex eaque dignissimos, assumenda repellat perferendis? Quisquam pariatur eaque minus alias?
        Eos labore necessitatibus maiores, animi saepe harum ea vitae a vel maxime enim similique consequatur sapiente recusandae reiciendis, numquam aperiam repellat, non id expedita ullam. Consequatur natus fugit incidunt minima?
        Aspernatur dolore tempore eius perferendis fugit quod. Hic quas nobis ipsum quasi deserunt illum molestias excepturi ducimus odit error quidem, quibusdam magni, cumque quia perferendis ipsa ratione similique pariatur inventore.
        Saepe, nesciunt! Error facilis fugiat non suscipit repellendus quo tenetur deserunt molestiae, earum, odit corrupti neque dolores qui et cumque obcaecati! Sit perspiciatis tenetur modi asperiores error quibusdam quis. Amet?
        Cupiditate architecto itaque ipsa inventore beatae rem, nostrum provident reiciendis fugit optio voluptas recusandae, accusantium fugiat aperiam at assumenda odio enim eos nobis! Fugit fuga quibusdam, vitae enim libero iure!
        Aspernatur reprehenderit, fugit doloremque, eligendi iure libero necessitatibus vel vero ducimus accusantium earum suscipit blanditiis nostrum qui saepe tempora, expedita perspiciatis! Similique excepturi commodi deleniti laboriosam nulla inventore nesciunt rerum.
        Eaque, quas dicta. Neque excepturi cum assumenda debitis provident nesciunt, vero libero! Voluptatibus cumque reprehenderit quod minima dolore consequuntur. Harum optio alias autem repellendus deserunt cumque obcaecati ab facilis nam.
        Voluptatum, voluptas dignissimos. Neque quos facilis fuga nostrum incidunt modi rem nobis architecto recusandae, amet minima explicabo reprehenderit optio repellat beatae labore natus mollitia, distinctio possimus qui officia? Quae, excepturi?
        Dolorem quae, optio labore amet rerum quis facere minus ex officiis velit, voluptatibus error minima placeat! Sapiente, ducimus velit, iusto deserunt quis fuga accusamus error, ut neque placeat harum delectus?
        Repudiandae, blanditiis fugit? Repellat ex recusandae sequi consequatur magnam adipisci nobis dolorum reprehenderit vitae? Voluptate ipsam enim aliquid eveniet. Perspiciatis provident facere debitis minima unde, nihil facilis et! Suscipit, distinctio!
        Consequuntur assumenda quibusdam, reiciendis dicta dolores nesciunt perferendis impedit, laborum hic vitae similique dolor nemo nihil doloremque facilis cum sapiente esse dolore dolorum qui ea? Quam in doloremque ex quidem!
        Praesentium possimus dicta dolores! Modi enim nam nulla ipsa non. Laudantium illo maxime reprehenderit laborum, obcaecati cum at nostrum quam sunt corrupti. Beatae, consectetur? Id, recusandae tempore. Cum, aliquid odit?
        Nostrum odit corporis quaerat porro inventore debitis laboriosam ea provident est amet molestias tempore totam adipisci nobis, maxime sunt consequuntur facere optio praesentium possimus aspernatur ipsum. Nihil mollitia odit libero.
        Nemo error unde labore reprehenderit ipsum quasi eos aliquid impedit fugiat voluptas veniam quia, molestiae enim possimus numquam, reiciendis iusto fugit, facilis qui quo sed et. Error iste repudiandae dicta?
        Nam numquam ex officia odit magni ullam libero, error unde facilis. Quo cupiditate aspernatur quae iusto nisi quis quaerat ducimus doloremque laudantium animi, nostrum, magnam, dolor saepe voluptates accusamus impedit.
        Aperiam esse obcaecati non provident neque nisi dolorem odit maxime incidunt, magni numquam illo dicta at odio doloribus vero libero quos fugit! In corporis dolorem incidunt amet accusantium explicabo voluptatum!
        Cumque assumenda officia repellat saepe sunt distinctio magni. Minima ea impedit quibusdam dolorum accusantium rem dolorem odit aliquam eaque culpa! Quia, perspiciatis facilis qui illo eum incidunt sint voluptatem laudantium?
        Magni pariatur maxime necessitatibus vel. Commodi provident at nulla totam maiores eligendi dicta necessitatibus id quae cumque. Quod, illum. Iure aliquid quo ipsum quam a culpa sapiente. Dolorem, commodi esse?
        Dolore obcaecati repellendus ipsa illo, perspiciatis ea saepe maxime aperiam quae praesentium quas architecto. Libero alias iusto eveniet numquam mollitia quis, error facere. Enim voluptatum fugiat, et praesentium voluptatibus dolore?
        Explicabo beatae ducimus fuga saepe fugiat veritatis perferendis hic consequuntur itaque molestiae eos labore, aliquid unde dolore nihil non amet ullam necessitatibus esse numquam ipsum, tempora quae. Voluptate, eum ullam.
        Accusantium omnis facilis in officiis. Rerum debitis voluptatum asperiores aliquid, et delectus adipisci recusandae, exercitationem excepturi corporis quaerat iusto. Facere, quo nihil. Possimus distinctio alias error modi tempora quisquam veniam!
        Architecto esse officia rem autem natus eveniet dolorem iure minus laboriosam temporibus? Fugit modi sit neque cum mollitia consectetur ullam minus sapiente! Doloribus, adipisci aperiam iusto nam omnis dolore laboriosam!
        Est tenetur aliquam hic commodi ratione unde aperiam perspiciatis exercitationem sunt eligendi, eveniet accusamus, voluptas doloremque cupiditate reiciendis velit repellat enim eius quasi temporibus. Sequi inventore placeat reiciendis corrupti maiores.
      </p>
    </main>
</body>
</html>