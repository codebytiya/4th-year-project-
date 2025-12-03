 <!-- Programme -->
      <div class="form-group">
        <label for="programme">Programme</label>
        <select id="programme" name="programme" required>
          <option value="">-- Select Programme --</option>
          <option value="bba">Bachelor of Business Administration (BBA)</option>
          <option value="mba">Master of Business Administration (MBA)</option>
          <option value="bsc">BSc in Business Management</option>
          <option value="msc">MSc in Business Analytics</option>
          <option value="exec-mba">Executive MBA</option>
        </select>
      </div>

      <!-- Year -->
      <div class="form-group">
        <label for="year">Year</label>
        <select id="year" name="year" required>
          <option value="">-- Select Year --</option>
          <option value="1">Year 1</option>
          <option value="2">Year 2</option>
          <option value="3">Year 3</option>
          <option value="4">Year 4</option>
        </select>
      </div>

      <!-- Semester -->
      <div class="form-group">
        <label for="semester">Semester</label>
        <select id="semester" name="semester" required>
          <option value="">-- Select Semester --</option>
          <option value="1">Semester 1</option>
          <option value="2">Semester 2</option>
        </select>
      </div>
      <script>
              if (!programme) {
        alert('Please select your programme.');
        return;
      }

      if (!year) {
        alert('Please select your year.');
        return;
      }

      if (!semester) {
        alert('Please select your semester.');
        return;
      }
      </script>

