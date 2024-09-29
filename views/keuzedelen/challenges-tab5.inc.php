<div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">

<h2 class="text-2xl font-bold ">Automatisering voor en door studenten</h2>
<p class="my-4 font-bold text-gray-700">Het project MBO digitaal is een project van de Software Development
    opleiding van het Vista College. Studenten helpen om allerdaagse zaken zoals keuzedelen, beoordelingen en
    examenroosters overzichtelijk te maken voor studenten. Dit doen ze door processen, die veelal door docenten
    worden uitgevoerd, te automatiseren.</p>
<p class="mb-4 font-normal text-gray-700 ">Dit project is een onderdeel van Challenge Based
    Learning (CBL) waarin groepen studenten worden uitgedaagd om het bestaande project MBO Digitaal uit te breiden met
    nieuwe functionaliteiten die van meerwaarde zijn voor studenten en docenten.</p>

<h3 class="text-xl font-bold ">Overzicht van onze opleidingen</h3>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
            <th scope="col" class="px-6 py-3">
                            Code
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Titel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SBU
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Goals Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precondition
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Teaching Methods
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Certificate
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link Video
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link KD
                        </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($keuzedelen as $keuzedeel) {
                ?>
                <tr
                    class="odd:bg-white even:bg-gray-50 border-b ">
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["code"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["title"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["sbu"]; ?>
                    </td>
                    <td class="px-6 py-4">
                         <?php echo $keuzedeel["description"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["goalsDescription"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["preconditions"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["teachingMethods"]; ?>
                    </td>
                    <td class="px-6 py-4">
                         <?php echo $keuzedeel["certificate"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["linkVideo"]; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $keuzedeel["linkKD"]; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>