$datadetail = array (
                        'doc_control_no'    => $_POST['catid'],
                        'doc_name'          => $_POST['cattype'],
                        'doc_control_no'    => $_POST['docno'],
                        'doc_rev'           => $_POST['docrev'],
                        'trn_checker'       => $_POST['docstatus'],
                        'trn_approver'      => $_POST['pic_dept'],                        
                        'doc_ymdcrt'        => date("Y-m-d H:i:s"),
                        'doc_usrcrt'        => $this->session->userdata('user_name'),
                        'doc_hostcrt'       => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                        'doc_ymdupd'        => date("Y-m-d H:i:s"),
                        'doc_usrupd'        => $this->session->userdata('user_name'),
                        'doc_hostupd'       => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                );        
$this->db->insert('qms.TH_DATA_DOC', $datadetail);
