

create_report_json:
	semgrep --config=semgrep_rules.yaml --output scan_report.pdf --json .

scan:
	semgrep --config=semgrep_rules.yaml .