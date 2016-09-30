// JavaScript Document
            var subjectByState = {
             cse: ["FCPC","FCPC_Lab","Computer_Architecture_Organisation","Ds_using_C","Discrete_Structures","Digital_Analog_Communication","Digital_Electronics","PC_Lab","DS_Lab","Digital_Electronics_Lab","TOA","Microprocessors","Computer_Graphics","Multimedia","Web_Development","Opreting_system","Graphics_Lab","OS_Lab","Multimedia_Lab","Web_Development_Lab","Practical_Traning_I"],
                ece: ["Basic_of_Electronics","Basic_of_Electronics_Lab","Electronic_devices_Circuits","Network_Theory","Electromechanical_Energy_Conserv","Network_Theory_Lab","Electronic_workshop_PCB_Lab","Electrical_Workshop_Machine_Lab","Communication_Engg","Electronic_Measurement_Instrumentation","Analog_Electronics_Circuits","Antennas_Wave_Propagation_TV_Engg","Microprocessors_Interfacing","Electronic_Measurement_Instrumentation_Lab","Microprocessors_Interfacing_Lab","Analog_Electronics_Circuits_Lab","Practical_Traning"],
                ee:["Electrical_Technology","Electrical_Technology_Lab","Electronic_devices_Circuits","Network_Theory","Electrical_Machines_I","Electrical_Measurment_Measu_Instruments","Network_Theory_Lab","Electrical_Machines_I_Lab","Electrical_Measurment_Measu_Instruments_Lab","Electrical_Workshop","Electrical_Machines_II","Electronic_Measu_Instrumentation","Analog_Electronics_Circuits","Power_System_I","Power_Electronics","Microprocessors_Interfacing","Electrical_Machines_II_Lab","Electronic_Measu_Instrumentation_Lab","Power_Electronics_Lab","Microprocessors_Interfacing_Lab","Practical_Traning_I"],
                me:["Basic_of_ME","Basic_of_ME_Lab","Workshop_Technology","Engg_Graphics_Drawing","Thermodynamics","computer_Aided_design","Engg_Mechanics","Material_science","Machine_drawing","CAD_Lab","Engg_Mechanics_Lab","Material_science_Lab","Dynamics_of_Machines","Fluid_Machine","Mechnical_machine_Design_I","Manafacturing_Tech_II","Internal_Combustion_En_Gasturbine","Applied_Num_tech_Computing","Dynamics_of_Machines_Lab","Fluid_Machine_Lab","Manafacturing_Tech_II_Lab","Internal_Combustion_En_Gasturbine_Lab","Applied_Num_tech_Computing_Lab","Practical_Traning"],
                ce:["Structural_Analysis_I","Building_Constru_Materials","Fluid_Mechanics_I","Surveying_I","Building_Drawing","Structural_Analysis_I_Lab","Fluid_Mechanics_I_Lab","Surveying_I_Lab","Design_of_Steel_Stru_I","Transportation_Engg_I","Water_Supply_Treatment","Soil_Mechanics","Numerical_Methods_computing_Tech","Hydrology","DSS_Drg_Lab","Soil_Mechanics_Lab","Transportation_lab_I","Survey_Camp","Auto_Cad_Lab"],
                bba_gen:["Business_Organization", "Business_Mathematics", "Financial_Accounting", "Computer_Fundamentals", "Business_Communication", "Microeconomics_for_Business_Decisions", "Computer_Fundamentals_Lab","Cost_and_Management_Accounting", "Marketing_Management", "Capital_Markets", "Introduction_to_Information_Tech", "Environment_Studies", "Disaster_Management", "Introduction_to_Information_Tech_Lab","Production_and_Materials_Management", "Company_Law","Indian_Business_Environment", "Computer_Networking_Internet", "Presentation_Skills_Personality_Development", "Cyber_Security", "Summer_Training_Report","Computer_Networking_Internet_Lab"],
                bba_finance:["Foundations_of_Management","Business_Economics","Financial_Accounting","Computers_and_Information_Systems","Research_Methodology","CIS_Lab","Indian_Business_Environment","Operations_Management","System_Analysis_and_Design","Disaster_Management","Project_Management","Training_Report","System_Analysis_and_Design_Lab","Advertising_and_Sales_Management","Business_Policy_and_strategic_Manag","Consumer_Behaviour","MIS_and_E_Business","Cyber_Security","Financial_Markets_and_Environment","Training_Report","MIS_and_E_Business_Lab"],
                pgdm:["Management_Fundamentals", "Managerial Economics_I", "Quantitative_Tech_for_Managers", "Accounting_for_Managers_I", "Organizational_Behavior_Dynamics_I"," IT_for_Managers","Professional_Commun_for_Business_Management_I","Workshop_Contemporary_Business_Environment_I","Marketing_Fundamentals", "Managerial_Economics_II",  "Financial_Management_I", "Research_Methodology_I", "Organizational_Behaviour_Dynamics_II","Contemporary_Business_Environment_II", "Professional_Comm_for_Business_Management-II","Marketing_Management_II", "Human_Values_Professional_Ethics", "Financial_Management_II", "Research Methodology_II", "Indian_Corporate_Law", "Operation_Management", "Managing_Human_Resources"],
                ash:["English", "Physics_1","Physics_1_Lab", "Mathematics_I","Mathematics_II","Mathematics_III", "Chemistry","Chemistry_Lab", "Evs","Essential_of_comm","Fundamentals_of_Management","Economics", "Erp"]

            }


            var subjectByState1 = {
             cse: ["1","2","3","4","5","6"],
			 ece: ["1","2","3","4","5","6"],
			 ee: ["1","2","3","4","5","6"],
			 me: ["1","2","3","4","5","6"],
			 ce:["1","2","3","4","5","6"],
			 bba_gen:["1","2","3","4","5","6"],
			 bba_finance:["1","2","3","4","5","6"],
			 pgdm:["1","2","3","4"],
			 ash:["1","2","3","4"],
			}

            function makeSubjectmenu(value) {
                if(value.length==0) document.getElementById("subjectSelect").innerHTML =
                    "<option></option>";
                else {
                    var subjectOptions = "";
                    for(subjectId in subjectByState[value]) {
                        subjectOptions+="<option>"+subjectByState[value][subjectId]+"</option>";
                    }
                    document.getElementById("subjectSelect").innerHTML = subjectOptions;
                }
            }

            function displaySelected() {
                var department = document.getElementById("departmentSelect").value;
                var subject = document.getElementById("subjectSelect").value;
                alert(department+"\n"+subject);
            }
            function resetSelection() {
                document.getElementById("departmentSelect").selectedIndex = 0;
                document.getElementById("subjectSelect").selectedIndex = 0;
            }
			
			
            function makeSubjectmenu1(value) {
                if(value.length==0) document.getElementById("subjectSelect1").innerHTML =
                    "<option></option>";
                else {
                    var subjectOptions = "";
                    for(subjectId in subjectByState1[value]) {
                        subjectOptions+="<option>"+subjectByState1[value][subjectId]+"</option>";
                    }
                    document.getElementById("subjectSelect1").innerHTML = subjectOptions;
                }
            }

            function displaySelected1() {
                var department = document.getElementById("departmentSelect1").value;
                var subject = document.getElementById("subjectSelect1").value;
                alert(department+"\n"+subject);
            }
            function resetSelection1() {
                document.getElementById("departmentSelect1").selectedIndex = 0;
                document.getElementById("subjectSelect1").selectedIndex = 0;
            }