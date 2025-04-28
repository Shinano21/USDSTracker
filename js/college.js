const collegeData = {
            "BU COLLEGE OF EDUCATION (BUCE)": [
                "Bachelor of Culture and Arts Education (BCAEd)",
                "Bachelor of Early Childhood Education (BECEd)",
                "Bachelor of Elementary Education (BEED)",
                "Bachelor of Secondary Education, major in English (BSED-Eng)",
                "Bachelor of Secondary Education, major in Filipino (BSED-Fil)",
                "Bachelor of Secondary Education, major in Mathematics (BSED-Math)",
                "Bachelor of Secondary Education, major in Science (BSED-Sci)",
                "Bachelor of Secondary Education, major in Social Studies (BSED-SS)",
                "Bachelor of Secondary Education, major in Values Education (BSED-VE)",
                "Certificate in College Teaching (CCT)",
                "Integrated Laboratory High School Department"
            ],
            "BU COLLEGE OF SCIENCE (BUCS)": [
                "Bachelor of Science in Biology (BSBio)",
                "Bachelor of Science in Chemistry (BSChem)",
                "Bachelor of Science in Computer Science (BSCS)",
                "Bachelor of Science in Information Technology (BSIT)",
                "Bachelor of Science in Meteorology (BSMet)"
            ],
            "BU COLLEGE OF MEDICINE (BUCM)": ["Doctor of Medicine (MD)"],
            "BU College of Agriculture and Forestry (BUCAF)": [
                "Bachelor of Science in Agriculture (BSA)",
                "Bachelor of Science in Agriculture (BSA), Major in Crop Science",
                "Bachelor of Science in Agriculture (BSA), Major in Animal Science",
                "Bachelor of Science in Agriculture (BSA), Major in Agricultural Extension",
                "Bachelor of Science in Forestry (BSF)",
                "Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)",
                "Bachelor of Science in Agribusiness (BSAb)",
                "Bachelor in Technical-Vocational Teachers Education (BTVTEd)",
                "Bachelor in Agricultural Technology (BAT)",
                "Doctor of Veterinary Medicine (DVM)",
                "Bachelor of Science in Food Technology (BSFT)",
                "Master of Science in Agriculture (MS Agriculture)",
                "Master of Science in Biodiversity and Environmental Management (MS BEM)",
                "Master in Rural Development (MRD)"
            ],
            "BU COLLEGE OF ARTS AND LETTERS (BUCAL)": [
                "Bachelor of Arts in Broadcasting (ABBroad)",
                "Bachelor of Arts in Communication (ABComm)",
                "Bachelor of Arts in English Language (ABEngLang)",
                "Bachelor of Arts in Journalism (ABJourn)",
                "Bachelor of Arts in Literature (ABLit)",
                "Bachelor of Performing Arts, major in Theater (BPeA)"
            ],
            "BU JESSIE M. ROBREDO INSTITUTE OF GOVERNANCE AND DEVELOPMENT (BUJMRIGD)": ["Bachelor of Public Administration (BPA)"],
            "BU COLLEGE OF NURSING (BUCN)": ["Bachelor of Science in Nursing (BSN)"],
            "BU COLLEGE OF ENGINEERING (BUCENG)": [
                "Bachelor of Science in Chemical Engineering (BSCheE)",
                "Bachelor of Science in Civil Engineering (BSCE)",
                "Bachelor of Science in Electrical Engineering (BSEE)",
                "Bachelor of Science in Geodetic Engineering (BSGE)",
                "Bachelor of Science in Mechanical Engineering (BSME)",
                "Bachelor of Science in Mining Engineering (BSEM)",
                "Bachelor of Science in Computer Engineering (BSCoE)",
                "Bachelor of Science in Electronics Engineering (BSECE)"
            ],
            "BU INSTITUTE OF DESIGN AND ARCHITECTURE (BUIDeA)": [
                "Bachelor of Science in Architecture (BSArch)",
                "Bachelor in Industrial Design (BID)"
            ],
            "BU INSTITUTE OF P.E., SPORTS AND RECREATION (BUIPESR)": [
                "Bachelor of Physical Education (BPED)",
                "Bachelor of Science in Exercise & Sports Sciences, major in Fitness and Sport Coaching (BSESS-FSC)",
                "Bachelor of Science in Exercise & Sports Sciences, major in Fitness and Sport Management (BSESS-FSM)"
            ],
            "BU COLLEGE OF INDUSTRIAL TECHNOLOGY (BUCIT)": [
                "Bachelor of Science in Civil Technology (BSCT)",
                "Bachelor of Science in Electrical Technology (BSET)",
                "Bachelor of Science in Electronics Technology (BSELT)",
                "Bachelor of Science in Food Technology (BSFT)",
                "Bachelor of Science in Industrial Education (BSIE)",
                "Bachelor of Science in Mechanical Technology (BSMT)"
            ],
            "BU COLLEGE OF BUSINESS, ECONOMICS, AND MANAGEMENT (BUCBEM)": [
                "Bachelor of Science in Accountancy (BSAcct)",
                "Bachelor of Science in Economics (ABEcon)",
                "Bachelor of Science in Entrepreneurship (BSEntrep)",
                "Bachelor of Science in Business Administration (BSBA), major in:",
                "Financial Management (BSBA-FM)",
                "Human Resource Management (BSBA-HRM)",
                "Management (BSBA-Mgt)",
                "Marketing Management (BSBA-MM)",
                "Microfinance (BSBA-MF)",
                "Operations Management (BSBA-OM)"
            ],
            "BU COLLEGE OF SOCIAL SCIENCES AND PHILOSOPHY (BUCSSP)": [
                "Bachelor of Arts in Peace Studies (BAPS)",
                "Bachelor of Arts in Philosophy (ABPhilo)",
                "Bachelor of Arts in Political Science (ABPolSci)",
                "Bachelor of Arts in Sociology (ABSocio)",
                "Bachelor of Science in Psychology (ABPsyc)",
                "Bachelor of Science in Social Work (BSSW)"
            ],
            "BU COLLEGE OF DENTAL MEDICINE (BUDMD)": ["Doctor of Dental Medicine (DMD)"],
            "BU COLLEGE OF LAW": ["Bachelor of Laws (LLB)"],
            "BU GRADUATE SCHOOL": [],
            "BU GUINOBATAN CAMPUS": [
                "Bachelor of Science in Agricultural Engineering (BSABE)",
                "Bachelor of Science in Agriculture, major in:",
                "Animal Science (BSAAS)",
                "Crop Science (BSACS)",
                "Agricultural Extension (BSAAEx)",
                "Agribusiness (BSAgrib)",
                "Agriculture and Biosystems (BSAgrib)",
                "Bachelor of Science in Forestry (BSF)",
                "Bachelor of Science in Fisheries (BSFish)"
            ],
            "BU POLANGUI CAMPUS": [
                "Bachelor in Elementary Education (BEEd)",
                "Bachelor in Secondary Education (BSEd)",
                "Bachelor of Science in Information System (BSIS)",
                "Bachelor of Science in Information Technology (BSIT)",
                "Bachelor of Science in Information Technology, major in Animation (BSIT-Anim)",
                "Bachelor of Science in Computer Engineering (BSCompE)",
                "Bachelor of Science in Electronics Engineering (BSECE)",
                "Bachelor of Science in Nursing (BSN)",
                "Bachelor of Science in Automotive Technology (BSAT)",
                "Bachelor of Science in Electrical Technology (BSET)",
                "Bachelor of Science in Entrepreneurship (BSEnt)",
                "Bachelor of Science in Electronics Technology (BSELT)",
                "Bachelor of Science in Food Technology (BSFT)",
                "Bachelor of Science in Mechanical Technology (BSMT)"
            ],
            "BU TABACO CAMPUS": [
                "Bachelor in Secondary Education (BSEd)",
                "Bachelor in Secondary Education Major in Mathematics (BSEd Math)",
                "Bachelor in Secondary Education Major in Science (BSEd Sci)",
                "Bachelor in Secondary Education Major in Biological Science (BSEd BioSci)",
                "Bachelor of Science in Entrepreneurship (BSEnt)",
                "Bachelor of Science in Nursing (BSN)",
                "Bachelor of Science in Social Work (BSSW)",
                "Bachelor of Science in Food Technology (BSFT)",
                "Bachelor of Science in Fisheries (BSF)"
            ],
            "BU GUBAT CAMPUS": [
                "Bachelor in Elementary Education",
                "Bachelor in Secondary Education Major in Filipino",
                "Bachelor in Secondary Education Major in Social Studies",
                "Bachelor of Science in Entrepreneurship",
                "Bachelor in Agricultural Technology"
            ],
            "BU TECHNICAL-VOCATIONAL TEACHER EDUCATION (BTVTeD)": [
                "Bachelor in Technical - Vocational Teacher Education (BTVTeD), major in:",
                "Drafting Technology (BTVTeD-DT)",
                "Electrical Technology (BTVTeD-ELT)",
                "Food and Service Management (BTVTeD-FSM)",
                "Garments, Fashion, and Design (BTVTeD-GFD)",
                "Animal Production (BTVTeD-AP)",
                "Agriculture Crop Production (BTVTeD-ACP)"
            ],
            "OTHER PROGRAMS": [
                "Bachelor in Agricultural Technology (BAT)",
                "Bachelor of Technology and Livelihood Education (BTLED)",
                "Bachelor of Technology and Livelihood Education, major in ICT (BTLED-ICT)"
            ],
            "Mixed COLLEGE (ORGS/CSC/USC)": [
                "Please put on If others, Please specify"
            ]
        };