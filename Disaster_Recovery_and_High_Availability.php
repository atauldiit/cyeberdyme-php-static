<?php include 'header.php'; ?>
<div id="wrapper_main">
  <?php include 'menu.php'; ?>
  <div class="content_wrapper">
    <div class="content_left">
      <div class="inner_page_content">
        <h2>Disaster Recovery (DR) </h2>
        <p>The goal of Cyberdyme's disaster recovery solution is to restore the business after an unplanned outage. It does this by providing standbys of primary systems and keeping them current through replication of changes from those systems. Changes can be replicated synchronously or asynchronously. If done asynchronously and an outage happens, changes may be lost (if the primary systems are down permanently) or stranded (if the primary systems are down temporarily). The amount of change data lost or stranded is dependent on the latency of replicated changes. If done synchronously, no committed changes are lost or stranded in an outage.</p>
        <p>This leads to two other terms - recovery point objective and recovery time objective.</p>
        <p>Recovery point objective (RPO) is an industry term used to describe the amount of changed data a business is willing to lose in an outage. You'll see the term "RPO=0" used when a company says its business cannot afford to lose any data in an outage. "RPO>0" says the company can go back to some prior point in time (i.e., strand or lose a defined time's worth of data) to restart its business.</p>
        <p>When a company is willing to accept a loss of data (RPO>0), they are generally driven by a desire to limit recovery time to an acceptable level. This is called the recovery time objective (RTO). With most disaster recovery solutions, there's a tradeoff between RPO and RTO. For example, if you want no data loss (RPO=0), some solutions require time to complete recovery before coming back on-line (RTO>0).</p>
        <p>The definition of disaster recovery does not include a statement about the availability of the data either during a disaster or during recovery. That's where the terms high and continuous availability come in. </p>
        <h2>High Availability (HA)</h2>
        <p>Cyberdyme's goals of high availability (HA) are to (1) make data available during defined periods and (2) meet availability objectives during those periods. Our HA solutions account for both planned and unplanned outages, but allow for something less than 100% availability. To meet objectives, our HA solutions typically include windows for planned outages such as maintenance. </p>
        <p>Our clients might have HA objectives like one of the following which Cyberdyme typically formalizes in a service level agreement (SLA): </p>
        <li>Make data available 99.9% of the time for the year.</li>
        <li>Data can be unavailable for no more than 10 hours a year during defined business hours.</li>
        <p>So what's the difference between disaster recovery and HA? Key points are as follows:</p>
        <li>As stated previously, disaster recovery focuses more on unplanned outages and maximizing recovery of data, while HA focuses more on making data available and accounting for both planned and unplanned outages.</li>
        <li>Building on the previous point - HA doesn't offer a guarantee that no data is lost in a disaster.</li>
        <li>Our disaster recovery solutions tend to be more of a single-site solution, with primary and standby being relatively close to one another, while HA is often used between sites that are separated by geographic distances that may span time zones.</li>
        <p>The last two point are why disaster recovery and HA are used together - two sites can each have a disaster recovery solution for their local copy of a database and then use a HA solution to keep data highly available between sites. </p>
        <p>Cyberdyme then can provide complete protection to your business and the data generated by your systems with the combination of cutting edge Disaster Recovery and Hih Availability solutions.</p>
      </div>
    </div>
    <?php include 'right_sidebar.php'; ?>
  </div>
  <?php include 'footer.php'; ?>
</div>
</body>
</html>