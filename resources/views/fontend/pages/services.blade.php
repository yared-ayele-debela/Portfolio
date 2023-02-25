@extends('fontend.fontend_layout')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Services &amp; Pricing</h2>
        <div class="intro">
            <p>I have 10+ years of development experience building software for the web and mobile devices. You can take a look at my <a href="portfolio.html" target="_blank">project portfolio</a> and <a href="resume.html" target="_blank">online resume</a> to find out more about my skills and experiences.</p>
            <p class="mb-0">I'm currently taking on freelance software development work. You're welcome to contact me for a custom quote for your project. I also offer development service packages with fixed pricing. </p>
        </div>
        
    </div><!--//container-->
</section>

<section class="pricing-section p-3 p-lg-5">
    <div class="container single-col-max-width">
        <h3 class="text-center mb-4">Service Packages</h3>
        <div id="pricing-tabs" class="pricing-tabs d-block d-md-none mb-3">
            <a href="#" class="pricing-tab active mb-2" data-tab-target="pricing-1-data">Basic</a>	           
            <a href="#" class="pricing-tab mb-2" data-tab-target="pricing-2-data">Standard</a>
            <a href="#" class="pricing-tab" data-tab-target="pricing-3-data">Premium</a>
        </div><!--//pricing-mobile-tabs-->
    
        <table id="pricing-table" class="pricing-table table-bordered">
            <thead>
                <tr class="border-0">
                    <th scope="col" class="pricing-0-data theme-bg-light"></th>
                    <th scope="col" class="pricing-package-title pricing-data pricing-1-data">Basic</th>
                    <th scope="col" class="pricing-package-title pricing-data pricing-2-data mobile-is-hidden">Standard</th>
                    <th scope="col" class="pricing-package-title pricing-data pricing-3-data mobile-is-hidden">Premium</th>
                </tr>
            </thead>
            <tbody>
                <tr class="pricing-price-row">
                    <th scope="row" class="pricing-0-data">Package Price</th>
                    <td class="pricing-data pricing-1-data"><span class="price-number">$900</span></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="price-number">$2500</span></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><span class="price-number">$5000+</span></td>
                </tr>
                
                <tr class="pricing-desc-row">
                    <th scope="row" class="pricing-0-data">Details</th>
                    <td class="pricing-data pricing-1-data"><span class="pricing-package-desc">A small app lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="pricing-package-desc">An medium app lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><span class="pricing-package-desc">A complex app lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span></td>
                </tr>
                
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Lorem<br><small class="feature-desc font-weight-normal text-muted">Optional feature description goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></th>
                    <td class="pricing-data pricing-1-data"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Ipsum<br><small class="feature-desc font-weight-normal text-muted">Optional feature description goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></th>
                    <td class="pricing-data pricing-1-data"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Commodo</th>
                    <td class="pricing-data pricing-1-data"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Consectetuer</th>
                    <td class="pricing-data pricing-1-data"><span class="text-muted">–</span></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Aenean</th>
                    <td class="pricing-data pricing-1-data"><span class="text-muted">–</span></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="text-muted">–</span></i></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Feature Duis</th>
                    <td class="pricing-data pricing-1-data"><span class="text-muted">–</span></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="text-muted">–</span></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Revisions</th>
                    <td class="pricing-data pricing-1-data"><span class="text-muted">1</span></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="text-muted">2</span></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden">5+</td>
                </tr>
                <tr class="pricing-feature-row">
                    <th class="pricing-feature-row-name pricing-0-data" scope="row">Delivery Time</th>
                    <td class="pricing-data pricing-1-data">7 days</td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden">14 days</td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden">2 - 3 month(s)</td>
                </tr>
                
            </tbody>
            <tfoot>
                <tr class="pricing-cta-row">
                    <td class="pricing-0-data"></td>
                    <td class="pricing-data pricing-1-data"><a class="btn btn-primary" href="#">Book Now</a></td>
                    <td class="pricing-data pricing-2-data mobile-is-hidden"><a class="btn btn-primary" href="#">Book Now</a></td>
                    <td class="pricing-data pricing-3-data mobile-is-hidden"><a class="btn btn-primary" href="#">Get A Quote</a></td>
                </tr>
            </tfoot>
        </table><!--//pricing-table-->
        
    </div><!--//container-->
</section><!--//pricing-section-->

<section class="faq-section">
    <div class="container single-col-max-width">
        <h3 class="text-center mb-4">FAQs</h3>
        <div class="text-center mb-5">You can use this section to address any queries your potential clients may have.</div>
        <div id="faq-accordion" class="faq-accordion accordion mx-auto text-start">

            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-1">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                    Can you sit amet quam eget lacinia?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-1">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
                    </div>
                </div>
            </div><!--//accordion-item-->
        
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-2">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    What is the ipsum dolor sit amet quam tortor?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-2">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
                    </div>
                </div>
            </div><!--//accordion-item-->
            
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-3">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    What if ultricies nec vulputate eget?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-3">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->   
           
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-4">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    Is it possible to tellus eget auctor condimentum?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-4">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->
            
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-5">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                    Do you elementum turpis semper imperdiet?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-5">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->
           
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-6">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                    How much imperdiet lorem sem non nisl?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq6" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-6">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->
        
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-7">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                    How long does it take to imperdiet lorem sem non nisl?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq7" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-7">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->
            
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-8">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                    Where can I imperdiet lorem sem non nisl?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq8" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-8">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->							
            
            <div class="accordion-item mb-3 rounded">
                <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-9">
                  <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                    When can lacinia ac dui ut semper?<i class="fas fa-chevron-down"></i>
                  </button>
                </h2>
                <div id="faq9" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-9">
                    <div class="accordion-body text-start">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.  
                    </div>
                </div>
            </div><!--//accordion-item-->
        </div><!--//faq-accordion-->
    </div><!--//container-->
</section><!--//faq-section-->

@endsection