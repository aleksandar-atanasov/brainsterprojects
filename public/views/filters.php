<div class="filtersContainer container">
        <form action="filter-cards.php" method="POST">
            <div class="row filtersRow">
                 <div class="col-md-6">
                 <span class="filterSpan">Browse by Category</span>
                     <div class="row filtersWrapper">
                            <div class="filterContent energizers col-md-4">
                                <input type="checkbox" id="energizers" value="Energizers" class="categoryFilter">
                                <label for="energizers">ENERGIZERS (<?=$card->countCategory('energizers')?>)</label>
                            </div>
                            <div class="filterContent col-md-4">
                                <input type="checkbox" id="inovation" value="Inovation" class="categoryFilter">
                                <label for="inovation">INOVATION (<?=$card->countCategory('inovation')?>)</label>
                            </div>
                            <div class="filterContent col-md-4">
                                <input type="checkbox" id="leadership" value="Leadership" class="categoryFilter">
                                <label for="leadership">SELF-LEADERSHIP (<?=$card->countCategory('leadership')?>)</label>
                            </div>
                            <div class="filterContent col-md-4">
                                <input type="checkbox" id="action" value="Action" class="categoryFilter">
                                <label for="action">ACTION (<?=$card->countCategory('action')?>)</label>
                            </div>
                            <div class="filterContent col-md-4">
                                <input type="checkbox" id="team" value="Team" class="categoryFilter">
                                <label for="team">TEAM (<?=$card->countCategory('team')?>)</label>
                            </div>
                            <div class="checkboxAll col-md-4">
                                <input type="checkbox" id="all" value="All" class="categoryFilter" checked>
                                <label for="all">ALL</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <span class="filterSpan">Time frame(minutes)</span>
                        <div class="row filtersWrapper">
                            <div class="filterContent col-md-6">
                                <input type="checkbox" id="5-30" value="5-30" class="timeFilter">
                                <label for="5-30">5-30</label>
                            </div>
                            <div class="filterContent col-md-6">
                                <input type="checkbox" id="30-60" value="30-60" class="timeFilter">
                                <label for="30-60">30-60</label>
                            </div>
                            <div class="filterContent col-md-6">
                                <input type="checkbox" id="60-120" value="60-120" class="timeFilter">
                                <label for="60-120">60-120</label>
                            </div>
                            <div class="filterContent col-md-6">
                                <input type="checkbox" id="120-240" value="120-240" class="timeFilter">
                                <label for="120-240">120-240</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <span class="filterSpan">Group size</span>
                        <div class="filtersWrapper row">
                            <div class="filterContent col-md-3">
                                <input type="checkbox" id="groupSize1" value="2-10" class="groupFilter">
                                <label for="groupSize1">2-10</label>
                            </div>
                            <div class="filterContent col-md-3">
                                <input type="checkbox" id="groupSize2" value="2-40" class="groupFilter">
                                <label for="groupSize2">10-40</label>
                            </div>
                            <div class="filterContent col-md-3">
                                <input type="checkbox" id="groupSize3" value="2-40+" class="groupFilter">
                                <label for="groupSize3">40+</label>
                            </div>
                            <div class="submitBtn col-md-3">
                                <input type="button" value="SEARCH" id="searchBtn">
                            </div>
        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>