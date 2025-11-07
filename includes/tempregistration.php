<form action="temp_process_form.php" method="POST" enctype="multipart/form-data">
  <div class="row gy-4">

    <!-- ================= BASIC INFORMATION ================= -->
    <h5 class="fw-bold mt-3 mb-2">Basic Information</h5>

    <div class="col-md-4">
      <label for="fname" class="form-label">First Name <span class="text-danger">*</span></label>
      <input type="text" id="fname" name="first_name" class="form-control" placeholder="Enter your first name" required>
    </div>

    <div class="col-md-4">
      <label for="mname" class="form-label">Middle Name</label>
      <input type="text" id="mname" name="middle_name" class="form-control" placeholder="Enter your middle name">
    </div>

    <div class="col-md-4">
      <label for="lname" class="form-label">Last Name <span class="text-danger">*</span></label>
      <input type="text" id="lname" name="last_name" class="form-control" placeholder="Enter your last name" required>
    </div>

    <div class="col-md-3">
      <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
      <input type="date" id="dob" name="dob" class="form-control" required>
    </div>

    <div class="col-md-3">
      <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
      <select id="gender" name="gender" class="form-select" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
    </div>

    <div class="col-md-6">
      <label for="profilePhoto" class="form-label">Profile Photo <span class="text-danger">*</span></label>
      <input type="file" id="profilePhoto" name="profile_photo" class="form-control" accept="image/*" required>
    </div>

    <!-- ================= ACADEMIC DETAILS ================= -->
    <h5 class="fw-bold mt-4 mb-2">Academic Details</h5>

    <div class="col-md-4">
      <label for="passingYear" class="form-label">Year of Passing<span class="text-danger">*</span></label>
      <select id="passingYear" name="passing_year" class="form-select" required></select>
    </div>

    <div class="col-md-4">
      <label for="stream" class="form-label">Stream <span class="text-danger">*</span></label>
      <select id="stream" name="stream" class="form-select" required>
        <option value="">Select Stream</option>
        <option value="PCM">PCM</option>
        <option value="PCB">PCB</option>
        <option value="PCM"value="Commerce">Commerce</option>
        <option values="Arts">Arts</option>
      </select>
    </div>

    <div class="col-md-4">
      <label for="stream" class="form-label">Class & Sec<span class="text-danger">*</span></label>
      <select id="stream" name="classAndSec" class="form-select" required>
        <option value="">Select Class & Sec</option>
        <option value="XIIA">XII A</option>
        <option value="XIIB">XII B</option>
        <option value="XIIC">XII C</option>
        <option value="XIID">XII D</option>
      </select>
    </div>


   
    <!-- ================= HIGHER EDUCATION ================= -->
    <div class="col-md-12 mt-4">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0">Higher Education</h5>
        <button type="button" class="btn btn-success btn-md fw-bold" onclick="addEducation()">
            <i class="bi bi-plus-circle"></i> Add Education
        </button>
       </div>
      <div id="educationContainer" class="row gy-3 mt-2"></div>
    </div>

     <!-- ================= CAREER PATH ================= -->
    <h5 class="fw-bold mt-4 mb-2">Career Path</h5>

    <div class="col-md-6">
      <label for="careerPath" class="form-label">Select Your Current Path <span class="text-danger">*</span></label>
      <select id="careerPath" name="career_path" class="form-select" onchange="toggleSections()" required>
        <option value="">Select Option</option>
        <option value="housewife">Housewife / Homemaker</option>
        <option value="defence">Serving in Defence (Army / Navy / Air Force)</option>
        <option value="professional">Working Professional</option>
      </select>
    </div>

    <!-- ================= PROFESSIONAL DETAILS ================= -->
    <div id="professionalSection" class="d-none mt-4">
      <h5 class="fw-bold mb-3">Professional Details</h5>
      <div class="row gy-3">
        <div class="col-md-6">
          <label class="form-label">Profession / Designation <span class="text-danger">*</span></label>
          <input type="text" name="profession" class="form-control" placeholder="e.g., Software Engineer, Teacher">
        </div>
        <div class="col-md-6">
          <label class="form-label">Company / Organization <span class="text-danger">*</span></label>
          <input type="text" name="company" class="form-control" placeholder="Organization name">
        </div>
        <div class="col-md-4">
          <label class="form-label">Years of Experience</label>
          <input type="number" name="experience" class="form-control" placeholder="e.g., 5">
        </div>
        <div class="col-md-4">
          <label class="form-label">Work Location</label>
          <input type="text" name="work_location" class="form-control" placeholder="City, Country">
        </div>
        <div class="col-md-4">
          <label class="form-label">LinkedIn Profile</label>
          <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/username">
        </div>
      </div>
    </div>

    <!-- ================= DEFENCE DETAILS ================= -->
    <div id="defenceSection" class="d-none mt-4">
      <h5 class="fw-bold mb-3">Defence Service Details</h5>
      <div class="row gy-3">
        <div class="col-md-4">
          <label class="form-label">Branch <span class="text-danger">*</span></label>
          <select name="branch" class="form-select">
            <option value="">Select Branch</option>
            <option>Army</option>
            <option>Navy</option>
            <option>Air Force</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Rank <span class="text-danger">*</span></label>
          <input type="text" name="rank" class="form-control" placeholder="e.g., Captain, Major">
        </div>
        <div class="col-md-4">
          <label class="form-label">Year of Joining <span class="text-danger">*</span></label>
          <input type="number" name="join_year" class="form-control" placeholder="e.g., 2010">
        </div>
        <div class="col-md-6">
          <label class="form-label">Current Posting / Location</label>
          <input type="text" name="defence_position" class="form-control" placeholder="e.g., Command HQ, Delhi">
        </div>
        <div class="col-md-6">
          <label class="form-label">Service Number (optional)</label>
          <input type="text" name="service_number" class="form-control" placeholder="e.g., IC-12345">
        </div>
      </div>
    </div>

    <!-- ================= CONTACT DETAILS ================= -->
    <h5 class="fw-bold mt-4 mb-2">Contact Details</h5>

    <div class="row g-3">
      <div class="col-md-6">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>
      
      <div class="col-md-6">
        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
      </div>

      <div class="col-md-12">
        <label for="address1" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="address1" name="address1" placeholder="Street, House No" required>
      </div>

      <div class="col-md-12">
        <label for="address2" class="form-label">Address Line 2</label>
        <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, Area (Optional)">
      </div>

      <div class="col-md-6">
        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
        <select id="country" name="country" class="form-select" required>
          <option value="">Select Country</option>
          <option value="India">India</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="state" class="form-label">State <span class="text-danger">*</span></label>
        <select id="state" name="state" class="form-select" required>
          <option value="">Select State</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="city" class="form-label">City <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
      </div>

      <div class="col-md-6">
        <label for="zip" class="form-label">Postal Code <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="zip" name="zip" placeholder="ZIP / Postal Code" required pattern="[0-9]{5,6}" title="Enter a valid postal code">
      </div>


    </div>



    </div>

    <!-- ================= SUBMIT ================= -->
    <div class="col-md-12 text-center mt-4">
      <button type="submit" class="btn btn-primary px-4 py-2">Submit Profile</button>
    </div>

  </div>
</form>

<!-- ================= JAVASCRIPT ================= -->
<script>
  // Generate year options
  const startYear = 1991;
  const currentYear = new Date().getFullYear();
  for (let y = startYear; y <= currentYear; y++) {
    ['passingYear'].forEach(id => {
      const opt = document.createElement('option');
      opt.value = y;
      opt.text = y;
      document.getElementById(id).appendChild(opt);
    });
  }

  // Toggle visibility
  function toggleSections() {
    const path = document.getElementById("careerPath").value;
    document.getElementById("professionalSection").classList.add("d-none");
    document.getElementById("defenceSection").classList.add("d-none");

    if (path === "professional") document.getElementById("professionalSection").classList.remove("d-none");
    if (path === "defence") document.getElementById("defenceSection").classList.remove("d-none");
  }

  // Add Higher Education block
  let eduCount = 0;
  function addEducation() {
    eduCount++;
    const eduDiv = document.createElement("div");
    eduDiv.classList.add("row", "gy-2", "border", "p-3", "rounded", "mt-2");
    eduDiv.innerHTML = `
      <div class="col-md-1 d-flex align-items-center justify-content-center">
        <input type="checkbox" class="form-check-input includeEdu" checked title="Include this entry">
      </div>
      <div class="col-md-4">
        <input type="text" name="college[]" class="form-control" placeholder="College / University Name" required>
      </div>
      <div class="col-md-4">
        <input type="text" name="degree[]" class="form-control" placeholder="Degree (e.g., B.Tech, MBA)" required>
      </div>
      <div class="col-md-2">
        <input type="number" name="grad_year[]" class="form-control" placeholder="Year" required>
      </div>
      <div class="col-md-1 text-end">
        <button type="button" class="btn btn-danger btn-sm remove-btn" onclick="this.closest('.row').remove()">
            <i class="bi bi-x"></i>
        </button>
      </div>
    `;
    document.getElementById("educationContainer").appendChild(eduDiv);
  }

  // On submit — remove unchecked education blocks before PHP handles data
  document.querySelector("form").addEventListener("submit", (e) => {
    document.querySelectorAll("#educationContainer .row").forEach(row => {
      const include = row.querySelector(".includeEdu");
      if (!include.checked) row.remove();
    });
  });
</script>

<!-- JavaScript for dynamic countries and Indian states -->
<script>
  // List of Indian states
  const indiaStates = [
    "Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh",
    "Goa","Gujarat","Haryana","Himachal Pradesh","Jharkhand","Karnataka",
    "Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram",
    "Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana",
    "Tripura","Uttar Pradesh","Uttarakhand","West Bengal","Delhi","Jammu & Kashmir",
    "Ladakh","Puducherry","Chandigarh","Andaman and Nicobar Islands","Lakshadweep"
  ];

  // Populate countries dynamically
  fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
      const countrySelect = document.getElementById('country');
      data.sort((a, b) => a.name.common.localeCompare(b.name.common));
      data.forEach(country => {
        const option = document.createElement('option');
        option.value = country.name.common;
        option.text = country.name.common;
        countrySelect.add(option);
      });
    });

  // Populate states if India is selected
  document.getElementById('country').addEventListener('change', function() {
    const stateSelect = document.getElementById('state');
    stateSelect.innerHTML = '<option value="">Select State</option>'; // reset
    if(this.value === 'India') {
      indiaStates.forEach(state => {
        const option = document.createElement('option');
        option.value = state;
        option.text = state;
        stateSelect.add(option);
      });
    }
  });
</script>
