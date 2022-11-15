  <div class="scrollbar-sidebar ps ps--active-y">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">

                            <?php if ($rank >= 5 && $rank >= rmin && $rank != null)
                            {
                                ?>
                                   
                                   <li class="app-sidebar__heading">Moderators</li>
                               <li>
                                <a href="salsa-conversas-de-quarto">
                                    <i class="metismenu-icon pe-7s-display1">
                                    </i>Bedroom Conversations
                                </a>

                                <a href="salsa-banir-usuario">
                                    <i class="metismenu-icon pe-7s-close">
                                    </i>Ban a user
                                </a>

                                <a href="salsa-desbanir-usuario">
                                    <i class="metismenu-icon pe-7s-smile">
                                    </i>Unban a user
                                </a>

                                <a href="salsa-contas-fakes">
                                    <i class="metismenu-icon pe-7s-users">
                                    </i>Fake accounts
                                </a>

                                <a href="salsa-premiar-usuario">
                                    <i class="metismenu-icon pe-7s-joy">
                                    </i>Reward user
                                </a>
                            </li>

                        <?php } ?>

                         <?php if ($rank >= 7 && $rank >= rmin && $rank != null)
                            {
                                ?>

                            <li class="app-sidebar__heading">Administrators</li>
                               <li>
                                <a href="salsa-publicar-noticias">
                                    <i class="metismenu-icon pe-7s-note2">
                                    </i>Publish a news item
                                </a>
                                <a href="salsa-noticias">
                                    <i class="metismenu-icon pe-7s-print">
                                    </i>Published news
                                </a>
                                <a href="salsa-dar-emblema-usuario">
                                    <i class="metismenu-icon pe-7s-photo">
                                    </i> Give a Badge
                                </a>
                                <a href="salsa-remover-emblema-usuario">
                                    <i class="metismenu-icon pe-7s-safe">
                                    </i> Remove a Badge
                                </a>
                                <a href="salsa-dar-pontos-de-promocao">
                                    <i class="metismenu-icon pe-7s-cup">
                                    </i> Give promotion points
                                </a>
                                <a href="salsa-remover-promocao-ativa">
                                    <i class="metismenu-icon pe-7s-wallet">
                                    </i> Remove active promotion
                                </a>

                             

                                

                              
                            </li>
                        <?php } ?>
                        


                        <?php if ($rank >= 8 && $rank >= rmin && $rank != null)
                            {
                                ?>

                            <li class="app-sidebar__heading">Manager</li>
                               <li>
                                <a href="salsa-dar-cargo">
                                    <i class="metismenu-icon pe-7s-add-user">
                                    </i>Give a Rank
                                </a>
                             
                               

                             

                                

                              
                            </li>
                        <?php } ?>









                            
                           
                        </ul>
                    </div>