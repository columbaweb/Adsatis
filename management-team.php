<?php /* Template Name: Team */  ?>

<?php get_header(); ?>

<div id="content" class="management-team">  
   <div id="tabs">
      <ul class="nav">
         <li class="nav-one first">
            <a href="#tab-one" class="current boxgrid captionfull">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-mick.png" width="140" height="200" alt="Michael Birks" />
               <span class="cover boxcaption">
                  <strong>Michael Birks</strong>
                  <em>Executive Chairman</em>
               </span>
            </a>
         </li>
         <li class="nav-two">
            <a href="#tab-two" class="boxgrid captionfull">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-dean.png" width="140" height="200" alt="Dean Hodge" />
               <span class="cover boxcaption">
                  <strong>Dean Hodge</strong>
                  <em>Chief Executive</em>
               </span>
            </a>
         </li>
         <li class="nav-three">
            <a href="#tab-three" class="boxgrid captionfull">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-michael.png" width="140" height="200" alt="" />
               <span class="cover boxcaption">
                  <strong>Michael Smethurst</strong>
                  <em>Business Development Director</em>
               </span>
            </a>
         </li>
         <li class="nav-four">
            <a href="#tab-four" class="boxgrid captionfull">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-larry.png" width="140" height="200" alt="Laraine Campkin" />
               <span class="cover boxcaption">
                  <strong>Laraine Campkin</strong>
                  <em>Business Development Manager</em>
               </span>
            </a>
         </li>
         <li class="nav-five">
            <a href="#tab-five" class="boxgrid captionfull">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-violet.png" width="140" height="200" alt="Violet Franklin" />
               <span class="cover boxcaption">
                  <strong>Violet Franklin</strong>
                  <em>Consultant Resource Manager</em>
               </span>
            </a>
         </li>
         <li class="nav-six last">
            <a href="#tab-six" class="boxgrid captionfull">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-claire.png" width="140" height="200" alt="Claire de Klerk" />
               <span class="cover boxcaption">
                  <strong>Claire de Klerk</strong>
                  <em>Finance Officer</em>
               </span>
            </a>
         </li>
      </ul>
      
      <div class="grid_9">
         <h1><?php the_title(); ?></h1>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>	
         <?php endwhile; endif; ?>
      </div>
      
      <div id="sidebar" class="grid_3">
         <?php wp_nav_menu( array( 'theme_location' => 'about-us' ) ); ?>
      </div>
      
      <div class="grid_9 list-wrap">
         <ul id="tab-one">  
           <li class="team-photo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-mick-bio.png" width="200" height="152" alt="Michael Birks"></li>
           <li class="team-content">
              <h2>Michael Birks</h2>
              <h3>Executive Chairman</h3>
              <p>Michael is an Oxford graduate with an MA in Politics, Philosophy and Economics. He has over 30 years’ experience in the wholesale financial markets, in analysis, sales, trading and management roles, culminating in building and running a market making operation for Bankers Trust. He founded Adsatis is 1993, following 4 successful years as a sole practitioner consultant. Under Michael’s leadership, Adsatis has grown into a successful consulting practice with a wide range of corporate clients. In addition to his role as Chairman, Michael directly engages in client projects, specialising in the analysis of wholesale financial market developments and business strategy. Over the past four years he has increasingly focused on advisory work enabling a profitable response to the regulatory changes and has successfully delivered this advice to many leading financial market organisations.</p>  
           </li>
         </ul>
        		 
         <ul id="tab-two" class="hide">
            <li class="team-photo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-dean-bio.png" width="200" height="152" alt="Dean Hodge"></li>
            <li class="team-content">
              <h2>Dean Hodge</h2>
              <h3>Chief Executive</h3>
              <p>Dean holds a BSc. (Econ) from the London School of Economics. He is an experienced capital markets and treasury professional with an excellent technical understanding of the credit, FX, interest rate and equity markets, including related derivatives markets. Dean has direct experience of many aspects of investment banking having had a successful career with international banks in London and Asia. Since joining Adsatis in 2002, Dean has successfully delivered a wide range of business focussed projects, specialising in business engagement and requirements definition and in business strategy and development across several key market sectors. He has also worked in several roles as an interim manager. In 2007, Dean took over as Chief Executive of Adsatis, taking responsibility for the day-to-day management of the company, setting the standards required for maintaining high quality resourcing and project delivery as well as directing the management team.</p>
           </li>
         </ul>
      
         <ul id="tab-three" class="hide">
            <li class="team-photo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-michael-bio.png" width="200" height="152" alt="Michael Smethurst"></li>
            <li class="team-content">
              <h2>Michael Smethurst</h2>
              <h3>Business Development Director and Principal Consultant</h3>
              <p>Michael holds a BA in Economics and Politics from Bristol University. He has spent most of his career in the City, in trading, sales and management of fixed income securities, mainly in credit products. He was the Managing Director of the Eurobond business at BZW, responsible for all non-sterling credit products. Michael joined Adsatis in 1995, working as a consultant and co-managing the business. Since joining the company, he has led several major projects on business strategy, market research and data management initiatives for leading investment banks, exchanges and service providers. Since 2008, Michael has been responsible for all aspects of Adsatis’ business development.</p>
           </li>
         </ul>
      
         <ul id="tab-four" class="hide">
            <li class="team-photo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-larry-bio.png" width="200" height="152" alt="Laraine Campkin"></li>
            <li class="team-content">
              <h2>Laraine Campkin</h2>
              <h3>Business Development Manager and Principal Consultant</h3>
              <p>Laraine holds a BA (Hons) in Economics and Economic History from Leicester University and has spent most of her career in fixed income sales and sales management and, since 1996 when she joined Adsatis, in management consultancy in the finance sector. She is highly experienced and self-motivated individual who has a thorough understanding of all fixed income products with particular experience in the credit product area gained whilst working at Hambros and BZW. In addition, Laraine has a wide range of contacts working in all areas of the financial markets throughout Europe. Consultancy work has focussed on business intelligence and client research, assisting many leading organisations with informed decision making. Laraine also manages relationships with some of Adsatis’ leading accounts and leads the company’s marketing initiatives.</p>
           </li>
         </ul>
      
         <ul id="tab-five" class="hide">
            <li class="team-photo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-violet-bio.png" width="200" height="152" alt="Violet Franklin"></li>
            <li class="team-content">
              <h2>Violet Franklin</h2>
              <h3>Consultant Resource Manager</h3>
              <p>Violet holds a BA honours degree from the University of California, Irvine. She began her career as a data analyst before relocating to London. Since joining Adsatis in 2000, she has provided project administration and support for a range of internal and client projects as well as managing a team of 20 data cleansers for a major reference data project. As Resource Manager she continues to develop and manage Adsatis’ consultancy and supplier network, working in the management team to ensure our consultants’ experience and expertise are capitalised to meet client requirements.</p>
           </li>
         </ul>
         
         <ul id="tab-six" class="hide">
            <li class="team-photo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/02/adsatis-claire-bio.png" width="200" height="152" alt="Claire de Klerk"></li>
            <li class="team-content">
              <h2>Claire de Klerk</h2>
              <h3>Finance Officer</h3>
              <p>Claire graduated in Business Studies and initially worked in planning & research in a variety of roles & locations throughout the UK for Burton Group/Debenhams. She also spent a number of years living in South Africa, which led to her additional studies to become a fully qualified accountant. She qualified as an ACCA accountant October 2006 with most of her finance experience gained in general practice with a couple of regional accountancy firms. Claire Joined Adsatis in March 2008 where she works as the Finance Officer and runs our Administration office in Lyme Regis. She is responsible for control and management of the business support function, management accounting, business projections and all the main financial aspects of the company.</p>
           </li>
         </ul>
      </div>
   </div>
</div>

<?php if(get_field('quote' ) != ""): ?>
   <q class="grid_12"><?php the_field('quote'); ?></q>
<?php endif; ?>

<?php get_footer(); ?>