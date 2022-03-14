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
                        <span> FirmsData, </span> your Virtual Data Room for Mergers & Acquisition
                     </h1>
                  </div>
                  <div class="accordion" id="accordionCentral">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="true" aria-controls="cOne">                        
                        How FirmsData VDR helps in Mergers & Acquisitions process:
                      </button>
                    </h2>
                    <div id="cOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               <ul>
                                 <li> Our m&a virtual data room reduces the deal making time as data is always ready to be shared  </li>
                                 <li> In-house m&a subject matter experts helps technology team to deliver quality </li>
                                 <li> Advanced q&a processes to buyers & seller with a quick and effective facts validation </li>
                                 <li> Flexible data sharing & permissions to relevant stake holders </li>
                                 <li> A complete traceability of user activities to avoid misuse of data  </li>
                                 <li> Complete control on your data & its users </li>
                                 <li> Advanced in-depth customizable reports   </li>
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
                      FirmsData inbuilt features lets you focus on deal only, not on handling hustles of data sharing & securing
                      </button>
                    </h2>
                    <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                                 <li> Easy drag & drop </li>
                                 <li> Intutive user interface </li>
                                 <li> Single data or bulk upload  </li>
                                 <li> Support multiple formats </li>
                                 <li> Automatic indexing  </li>
                                 <li> Protected archiving & deletion </li>
                                 <li> Group permissions  </li>
                                 <li> User activity report  </li>
                                 <li> Complete audit trails  </li>
                                 <li> High level customized reports  </li>
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
                        FirmsData VDR for M&A deals ensures high level of security and compliances:
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