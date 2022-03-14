let screenSize = getScreenSize();

if (screenSize < 700) {
    showFeaturesContainer();
    showDemoContainer();
}

function getScreenSize() {
    return window.innerWidth;
}

function showFeaturesContainer() {
    let features = document.getElementById('feature');
    features.innerHTML = '';
    features.innerHTML += `
    <div class="container">
    <div class="section-header">
                     <h1 class="section-title text-center">
                        <span> FirmsData, </span> Securing Real Estate Data Sharing & Management
                     </h1>
                  </div>
                  <div class="accordion" id="accordionCentral">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="true" aria-controls="cOne">
                        Why you should use Virtual Data Room (VDR) for Real Estate:
                      </button>
                    </h2>
                    <div id="cOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               <ul>
                                 <li> VDR in Real Estate projects gives a single yet simple interface to store & share large datasets </li>
                                 <li> Real estate transactions and files are very sensitive information. Virtual Data Room in Real Estate projects make it secure even when data is being shared with a very large audience </li>
                                 <li> VDR in Real Estate business also gives admins a complete control on users of this data </li>
                                 <li> VDR in Real Estate helps investors and banks by simplifying Due Diligence process </li>
                                 <li> Virtual Data room saves a lot of time by providing its users a simple & secure platform for Q&A  </li>
                                 <li> All Real Estate projects have to go through legal and financial audits by various parties. Keeping all important data ready in Virtual Data Room helps during these audits </li>
                                 <li> It  helps big infrastructure & construction companies to manage multiple projects with multiple teams by using single platform  </li>
                                 </ul>
                            </div>
                            <div class="col-md-7">
                               <img src="images/Screen.png" alt="Document Management"
                                  class="value-img" />
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTwo" aria-expanded="false" aria-controls="cTwo">
                        Things to consider while selecting Virtual Data Room for Real Estate
                      </button>
                    </h2>
                    <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                                 <li> VDR provide should have Subject Matter Expertise in Real Estate </li>
                                 <li> Virtual Data Room for Real Estate should be very secure </li>
                                 <li> VDR platform should follow government guidelines  </li>
                                 <li> VDR in Real Estate helps investors and banks by simplifying Due Diligence process </li>
                                 <li> VDR in Real Estate should allow multiple projects management  </li>
                                 <li> It should provide comprehensive reporting system </li>
                                 <li> Data administrator should have complete control on data and its users  </li>
                                 </ul>
                            </div>
                            <div class="col-md-7">
                               <img src="images/Screen.png" alt="Reports"
                                  class="value-img" />
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cThree" aria-expanded="false" aria-controls="cThree">
                        FirmsData VDR for Real Estate management provides high level of security and compliances:
                      </button>
                    </h2>
                    <div id="cThree" class="accordion-collapse collapse" aria-labelledby="hThree" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                                 <li> Time and ip access restriction </li>
                                 <li> Granular user permissions </li>
                                 <li> Two-factor authentication  </li>
                                 <li> In transit & at rest encryption </li>
                                 <li> 256 bit ssl encryption </li>
                                 <li> Secure fence view </li>
                                 <li> Dynamic watermarks </li>
                                 <li> Remote shred </li>
                                 <li> Secure spreadsheet viewer </li>
                                 <li> Download restrictions </li>
                                 <li> Archiving control </li>
                                 <li> Iso:27001 security complainces </li>
                                 <li> Highly secure amazon servers </li>
                                 <li> Disaster Recovery </li>
                                 </ul>
                            </div>
                            <div class="col-md-7">
                               <img src="images/Screen.png" alt="Access Security"
                                  class="value-img" />
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
    </div>
    `
}

function showDemoContainer() {
    let demo = document.getElementById('demo');
    demo.innerHTML = '';
    demo.innerHTML += `
    <span style="color: #fff; font-size: 17px; margin-bottom: 7px;"> Get a demo </span>
    <a href="index.html">
    <button class="customBtn" style="background-color: white; border: none; color: #000;"> Start free trial </button>
    </a>  
    `;

}