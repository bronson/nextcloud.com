<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Workflow rules only check the file extension for the mimetype instead of the content (NC-SA-2020-002)</h2>
        <p>4th December 2019</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 5.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L">AV:N/AC:L/PR:L/UI:R/S:U/C:L/I:L/A:L</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/646.html">Reliance on File Name or Extension of Externally-Supplied File (CWE-646)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/697959">697959</a></p>
        <h3>Description</h3>
        <p>A bug in Nextcloud Server 17.0.1 causes the workflow rules to depend their behaviour on the file extension when checking file mimetypes.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>17.0.2</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>16.0.7</strong> (CVE assignment pending)</li>
<li>Nextcloud Server &lt; <strong>15.0.14</strong> (CVE assignment pending)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 17.0.2.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Ralf Thesing - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
