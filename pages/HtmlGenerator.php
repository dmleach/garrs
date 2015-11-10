<?php

class HtmlGenerator
{
    protected function loadYml($YmlFilepath)
    {
        require_once("spyc/Spyc.php");
        $Spyc = new Spyc;
        return $Spyc->loadFile($YmlFilepath);
    }

    public function loadProgramDescription($YmlFilepath, $Title)
    {
        $Html = "";
        $Directory = $this->loadYml($YmlFilepath);
        $ProgramCount = count($Directory);
        $idxProgram = 0;
        $Found = false;

        while ($idxProgram < $ProgramCount && $Found === false) {
            $Program = $Directory [$idxProgram];

            if (array_key_exists("title", $Program) && $Program ["title"] == $Title) {
                $Found = true;
                $Html = "<article>\n";

                try {
                    $Html .= "<h1 class='program-title'>{$Program ['title']}</h1>\n";

                    if (array_key_exists("description", $Program)) {
                        $Html .= "{$Program ['description']}\n";
                    }

                    if (array_key_exists("host", $Program)) {
                        $Html .= "Hosted by <span class='program-host'>{$Program ['host']}</span>.\n";
                    }

                    if (array_key_exists("schedule", $Program)) {
                        $Html .= "Airs {$Program ['schedule']}.\n";
                    }
                } finally {
                    $Html .= "</article>\n";
                }
            }

            $idxProgram++;
        }

        return $Html;
    }

    public function loadProgramDirectory($YmlFilepath)
    {
        $Html = "
            <article>
                <h1>Programs</h1>
                <ul class='program-list'>
        ";

        try {
            $Directory = $this->loadYml($YmlFilepath);

            foreach ($Directory as $Program) {
                if (array_key_exists("title", $Program)) {
                    $Html .= "<li>\n";

                    if (array_key_exists("url", $Program)) {
                        $Html .= "<a class='program-title' href='{$Program ['url']}'>{$Program ['title']}</a>\n";
                    } else {
                        $Html .= "<span class='program-title'>{$Program ['title']}</span>\n";
                    }

                    if (array_key_exists("description", $Program)) {
                        $Html .= "{$Program ['description']}\n";
                    }

                    if (array_key_exists("programs", $Program)) {
                        $Html .= "<ul class='program-sublist'>\n";

                        foreach ($Program ["programs"] as $Subprogram) {
                            if (array_key_exists("title", $Subprogram)) {
                                $Html .= "<li>";

                                if (array_key_exists("url", $Subprogram)) {
                                    $Html .= "<a class='program-title' href='{$Subprogram ['url']}'>{$Subprogram ['title']}</a>";
                                } else {
                                    $Html .= "<span class='program-title'>{$Subprogram ['title']}</span>";
                                }

                                $Html .= "</li>\n";
                            }
                        }

                        $Html .= "</ul>\n";
                    }

                    $Html .= "</li>\n";
                }
            }
        } finally {
            $Html .= "
                    </ul>
                </article>
            ";
        }

        return $Html;
    }

    public function loadProgramEpisodes($YmlFilepath)
    {
        $Html = "
            <article>
                <h1>Episodes</h1>
                <ul class='program-list'>
        ";

        try {
            $Episodes = $this->loadYml($YmlFilepath);

            foreach ($Episodes as $Episode) {
                if (array_key_exists("title", $Episode)) {
                    $Html .= "<li>\n";

                    try {
                        if (array_key_exists("url", $Episode)) {
                            $Html .= "<a class='program-episode' href='{$Episode ['url']}'>{$Episode ['title']}</a>\n";
                        } else {
                            $Html .= "<span class='program-episode>{$Episode ['title']}</span>\n";
                        }
                    } finally {
                        $Html .= "</li>\n";
                    }
                }
            }
        } finally {
            $Html .= "
                    </ul>
                </article>
            ";
        }

        return $Html;
    }

        // <article>
        //     <h1>Archived recordings</h1>
        //     <ul class="program-list">
        //         <li>
        //             <a class="program-episode" href="">Georgia Department of Human Services</a>
        //         </li>
        //         <li>
        //             <a class="program-episode" href="">NOAA</a>
        //         </li>
        //     </ul>
        // </article>
}
