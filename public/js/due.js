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
                        <span> FirmsData, </span> a secure Virtual Data Room for Due Diligence
                     </h1>
                  </div>
                  <div class="accordion" id="accordionCentral">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="true" aria-controls="cOne">
Key Industries where Virtual Data Room for Due Diligence plays an important role:
                      </button>
                    </h2>
                    <div id="cOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               <ul>
                                 <li> Financial Institutions:-  In case of M&A, Fund Raising or Restructuring, Due Diligence is required by every financial institution. VDR for M&A Due Diligence needs to comply with government guidelines and security standards. </li>
                                 <li> Law Firms: - Legal firms always deal with sensitive & confidential information of individuals and/or companies. VDR for Due Diligence is an obvious choice of all Law Firms to ensure security of data. </li>
                                 <li> Life Science & Biotech Companies: - Clinical trials, drug licenses and compliance documents are few major examples of sensitive data at Life Science & Biotech companies. Virtual Data Room for Biotech and Life Science companies makes it easy to store and share large data sets. </li>
                                 <li> Real Estate Companies: - Construction and building infrastructure involves regular data sharing with banks, lenders, builders and various contractors. It involves huge financial transactions and reporting to multiple companies & individuals. VDR for real estate is the key for data sharing. </li>
                                 <li> Information Technology: - Start-ups, fund raising, M&A, Venture capital, IPO etc. are common terms, we hear regularly in IT industry. It revolves around huge competitions and data sharing in between multiple parties. VDR is a de facto need in IT industry for complex Due Diligence.  </li>
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
                      Things to consider while selecting Virtual Data Room for Due Diligence
                      </button>
                    </h2>
                    <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                                 <li> VDR provider should have Due Diligence Subject Matter Expertise </li>
                                 <li> VDR should be ready for multiple Due Diligence check list </li>
                                 <li> Good to have industry wise Due Diligence knowledge  </li>
                                 <li> VDR in Real Estate helps investors and banks by simplifying Due Diligence process </li>
                                 <li> VDR platform should follow government guideline  </li>
                                 <li> VDR for Due Diligence should ensure data security </li>
                                 <li> VDR for Due Diligence should be easy to use  </li>
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
Features of FirmsData Virtual Data Room for Due Diligence:
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